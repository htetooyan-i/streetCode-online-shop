<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resell;
use App\Models\Product;
use App\Models\Payment;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route; 

class ResellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resellProducts = Resell::all();
        return view('admin/admin-resell-table',['resellProducts'=>$resellProducts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/test-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = Product::with('resells')
                    ->where('Name', $request->name)
                    ->get();
        foreach($products as $product){
            foreach( $product->avaliable_colorway as $colorway){
                if ($colorway == $request->color){
                    $resellProduct = Resell::create([
                        'Seller_id' => session('userId'),
                        'Product_id' => $product->id,
                        'Name' => $request->name,
                        'Color' => $request->color,
                        'Size' => $request->size,
                        'ranking' => mt_rand(1, 100),
                    ]);
                    $product->Stock += 1;
                    $product->save();
                    return redirect()->back()->with('success', $request->name.' is created successfully!');
                }else {
                    return redirect()->back()->with('fail', $request->color.' is not avaliable colorway for '.$request->name);
                }
            }
        }

        // $product->Stock ++;
        // $product->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,string $productId)
    {
        $products = Product::all();
        $uniqueProductName = $products->unique('Name')->pluck('Name');
        $uniqueProductColor = $products->unique('avaliable_colorway')->pluck('avaliable_colorway');
        $resellProducts = Resell::where('Seller_id', $id)->get();
        $resellProduct = Resell::find($productId);
        return view ('personal-detail',['accId' => $id, 'type' => 'Product','sellerProducts' => $resellProducts,'resellProduct'=>$resellProduct,'productNames'=>$uniqueProductName, 'productColorways' => $uniqueProductColor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, string $productId)
    {
        $products = Product::with('resells')
                    ->where('Name', $request->name)
                    ->get();
        foreach($products as $product){
            foreach( $product->avaliable_colorway as $colorway){
                if ($colorway == $request->color){
                    $resellProduct = Resell::find($productId);
                    $resellProduct->Seller_id = session('userId');
                    $resellProduct->Product_id = $product->id;
                    $resellProduct->Name = $request->name;
                    $resellProduct->Color = $request->color;
                    $resellProduct->Size = $request->size;
                    $resellProduct->save();
                    return redirect()->back()->with('success', $request->name.' is updated successfully!');
                }else {
                    return redirect()->back()->with('fail', $request->color.' is not avaliable colorway for '.$request->name);
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $productId  = null)
    {
        if (Str::contains(Route::currentRouteName(), 'account.products.delete')) {

            $product = Resell::find($productId);
            $product->delete();
        }else {
            $product = Resell::find($id);
            $product->delete();
        }
        return redirect()->back();
    }

    public function buyProduct(Request $request,string $id,string $color)
    {
        $paymentId = null;
        if ($request->payment_option == 'existing') {
            $paymentId = $request->input('payment_method');
        } else {
            $request->validate([
                'floating_firstName' => 'required',
                'floating_lastName' => 'required',
                'floating_cardNumber' => 'required',
                'floating_CVV' => 'required',
            ]);
            $checkCard = Payment::where('card_no',$request->input('floating_cardNumber'))->first();
            if($checkCard){
                $paymentId = $checkCard->id;
            }else{
                $newpayment = Payment::create([
                    'user_id' => session('userId'),  // Assuming the user is authenticated
                    'first_name' => $request->input('floating_firstName'),
                    'last_name' => $request->input('floating_lastName'),
                    'address' => $request->input('floating_address'),
                    'country' => $request->input('floating_country'),
                    'phone_no' => $request->input('floating_phone'),
                    'postal' => $request->input('floating_Postal'),
                    'card_no' => $request->input('floating_cardNumber'),
                    'expire' => $request->input('floating_Expires'),
                    'cvv' => $request->input('floating_CVV'),
                    'payment_method' => $request->input('payment'),
                ]);
                $paymentId = $newpayment->id;
            }
        }
        $product = Product::find($id);
        $resellProducts = Resell::where('Name', $product->Name)
                        ->where('Color', $color)
                        ->where('Size', $request->input('size'))
                        ->get('id');
        $order = Order::create ([
            'buyer_id' => session('userId'),
            'product_id' => $resellProducts,
            'address' => $request->address,
            'phone_no' => $request->phone_no,
            'email' => $request->floating_email,
            'bid_price' => $request->input('bid_price'),
            'payment_id' => $paymentId,
            'product_name' => $product->Name,
            'product_color' => $color,
            'size' => $request->input('size'),
            'response' => 'waiting',
        ]);


        
        return redirect()->route('cart')->with('success', 'Payment and product details have been saved successfully.');        
    }
}
