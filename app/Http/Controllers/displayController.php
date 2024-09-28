<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acc;
use App\Models\Product;
use App\Models\Resell;
use App\Models\Payment;
use App\Models\Order;
use App\Models\History;
use Illuminate\Database\Eloquent\Collection;

class displayController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function home()
    {   
        $sneakers = Product::where('keywords', 'LIKE', '%Sneakers%')
        ->orderBy('ranking', 'asc')
        ->orderBy('created_at', 'asc')
        ->limit(6)
        ->get();

        $apparels = Product::where('keywords', 'LIKE', '%Hoodies%')
        ->orderBy('ranking', 'asc')
        ->orderBy('created_at', 'asc')
        ->limit(6)
        ->get();

        return view('home',['sneakers'=>$sneakers, 'apparels' => $apparels]);
    }

    public function displayDetail( string $id, string $color,){
        
        $InvalidResellProduct = false;
        $product = Product::find($id);
        $resellProducts = Resell::where('Name', $product->Name)
                        ->where('Color', $color)
                        ->get();
        $marketData = History::where('product_name', $product->Name)->get();
        if (count($resellProducts) < 1) {
            $InvalidResellProduct = true;
        }
        $relatedProducts = Product::where('Brand', $product->Brand)
                          ->where('Category', $product->Category)
                          ->get();

        return view('product-detail',['product'=>$product,'relatedProducts'=>$relatedProducts,'color'=> $color,'InvalidResellProduct'=>$InvalidResellProduct,'marketData' => $marketData]);
    }
    public function news(){
        return view('magazine-article');
    }

    public function magazine(){
        return view('magazine-home');
    }
    public function userControl(){
        return view('userLogin');
    }
    public function buyProduct(string $id,string $color){
        $product = Product::find($id);
        $allProducts = Resell::where('Name', $product->Name)
                        ->where('Color', $color)
                        ->get();
        $resellProducts = $allProducts->unique('Size');
        $payments = Payment::where('user_id',session('userId'))->get();

        return view('product-payment',['product'=>$product,'color'=>$color,'payments'=>$payments,'resellProducts'=>$resellProducts]);
    }
    public function cart(){
        $itemPrice = 0;
        $processFee = 34.21;
        $shippingFee = 14.99;
        $cart = Order::where('buyer_id',session('userId'))->get();
        
        foreach ($cart as $item) {
            $itemPrice += $item['bid_price'];
        }

        if (count($cart) < 1) {
            $processFee = 0;
            $shippingFee = 0;
        }

        $totalPrice = $itemPrice + $processFee + $shippingFee;

        return view('cart',['itemPrice'=>sprintf("%.2f", $itemPrice), 'processFee' => sprintf("%.2f", $processFee), 'shippingFee' => sprintf("%.2f", $shippingFee), 'totalPrice' => sprintf("%.2f", $totalPrice),'cart'=>$cart]);
    }
    public function about(){
        return view('about');
    }

    public function help(){
        return view('help');
    }
    public function sell(){
        $products = Product::all();
        $allColorways = $products->pluck('avaliable_colorway')->flatten();
        $uniqueColorways = $allColorways->unique();
        $colorways= $uniqueColorways->toArray();

        $allProducts = $products->pluck('Name')->flatten();
        $uniqueProducts = $allProducts->unique();
        $productNames= $uniqueProducts->toArray();

        return view('sell',['products'=>$products,'colorways'=>$colorways,'productNames'=>$productNames]);
    }
    public function personalDetail(string $id){
        return view('personal-detail',['accId' => $id,'type' => 'Account']);
    }

    public function test(){
        return view('no-product-display');
    }

    public function deleteCartProduct(string $itemId){
        
        $order = Order::find($itemId);
        $order->delete();
        return redirect()->back()->with('remove', 'Item removed from cart.');
    }
    public function billing(string $id){
        $paymentMethods = Payment::where('user_id', $id)->get();
        return view('personal-detail',['accId' => $id, 'type' => 'Payment','paymentMethods' => $paymentMethods]);
    }
    public function browseProduct(Request $request){
        return redirect()->route('filter',['category' => $request->searchProduct]);
    }
    public function products(string $id){
        $sellerProducts = Resell::where('Seller_id',$id)->get();
        return view('personal-detail',['accId' => $id, 'type' => 'Products', 'sellerProducts' => $sellerProducts]);
    }

    public function orders(int $id){
        $orders = Order::where('response', 'waiting')->get();
        $accOrders = [];
        
        foreach($orders as $order){
            foreach($order->product_id as $product_id){
                $product = Resell::find($product_id)->first();
                if ( $product->Seller_id == $id){
                    array_push($accOrders, $order);
                }else {
                }
            }
        }
        
        return view('personal-detail',['accId' => $id, 'type' => 'Orders','orders' => $accOrders,]);
    }
    public function checkout(Request $request){
        $orders = Order::where('buyer_id',session('userId'))->get();
        $orderIds = '';
        $itemPrice = (float) $request->itemPrice;

        foreach($orders as $order){
            $name = $order->buyer_id;
            $buyName = Acc::find($name);
            if ($order -> response !== 'approved'){
                return redirect()->back()->with('fail-checkout', 'Hey ' . $buyName->firstname.' '. $buyName->lastname . ', You cannot proceed with the checkout until all products are accepted by the seller.');
            }
        }
        foreach($orders as $order){
            $resellProduct = Resell::find($order->product_id)->first();
            $seller = Acc::find($resellProduct->Seller_id)->first();
            $seller->earning += $itemPrice;
            $seller->save();
            
            $productColor = [$order->product_color]; // Access the first color in the array
            $product = Product::where('Name', $order->product_name)
                ->whereJsonContains('avaliable_colorway', $productColor[0])
                ->first();
            $product->num_sold_product += 1;
            $product->save();
            $orderIds .= (string) $order->id;

            $addHistory = History::create([
                'buyer_id' => session('userId'),
                'seller_id' => $resellProduct->Seller_id,
                'product_id' =>$product->id,
                'product_name' =>$order->product_name,
                'product_color' =>$productColor[0],
                'product_size' => $resellProduct->Size,
                'price' => $itemPrice,
            ]);

            $resellProduct->delete();
            $order->delete();
        }

        return redirect()->back()->with('success-checkout',$orderIds);
    }
}
