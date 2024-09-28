<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Resell;
use App\Models\Payment;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin/admin-order-table',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orderId = $request->input('order_id');
        $order = Order::find($orderId);

        if ($request->input('action') == 'approve') {
            $order->response = 'approved';

            foreach ( $order->product_id as $product_id ) {
                $resellProduct = Resell::find($product_id)->first();
                if ( $resellProduct->Seller_id == $id) {
                    $order->product_id = [
                        'id' => $resellProduct->id,
                    ];
                    break;
                }
            }
            $order->save();
            return redirect()->back()->with('success', 'Order ' . $orderId . ' approved successfully!');
        } elseif ($request->input('action') == 'decline') {
            $product_ids = $order->product_id;

            $removed = false;
            // Iterate through the array
            foreach ($product_ids as $key => $product_id) {
                if (!$removed) {
                    $resellProduct = Resell::find($product_id)->first();
                    if ($resellProduct && $resellProduct->Seller_id == $id) {
                        // Remove the first occurrence
                        unset($product_ids[$key]);
                        $removed = true; // Set flag to true after removing the item
                    }
                }
            }

            // Re-index the array keys if necessary
            $product_ids = array_values($product_ids);

            // Update the order with the modified product IDs
            $order->product_id = $product_ids; 
            if(count($order->product_id) < 1){
                $order->response = 'decline';
            }else {
                $order->response = 'waiting';
            }
            $order->save();
            return redirect()->back()->with('fail', 'Order ' . $orderId . ' declined.');
        }

        return redirect()->back()->with('error', 'No action taken.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Order::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function orderEdit(string $id) {
        $order = Order::find($id);
        $payments = Payment::where('user_id',session('userId'))->get();
        $selectPayment = Payment::find($order->payment_id);
        $allProducts = Resell::where('Name', $order->product_name)
                        ->where('Color', $order->product_color)
                        ->get();
        $resellProducts = $allProducts->unique('Size');
        return view('edit-product-payment',['order' => $order, 'selectPayment' => $selectPayment, 'payments' => $payments, 'resellProducts' => $resellProducts]);
    }
}
