<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Payment;
use Illuminate\Support\Str;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $payments = Payment::all();
        return view('admin/admin-payment-table',['payments'=>$payments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $paymentMethods = Payment::where('user_id', $id)->get();
        return view ('personal-detail',['accId' => $id, 'type' => 'Payment','paymentMethods' => $paymentMethods]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id)
    {

        Payment::create([
            'user_id' => $id,
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

        return redirect()->back();
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
    public function edit(string $id,string $paymentId)
    {
        $paymentMethods = Payment::where('user_id', $id)->get();
        $paymentMethod = Payment::find($paymentId);
        return view ('personal-detail',['accId' => $id, 'type' => 'Payment','paymentMethods' => $paymentMethods,'paymentMethodToUndate'=>$paymentMethod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, string $paymentId)
    {
        $payment = Payment::find($paymentId);
        $payment->first_name = $request->input('floating_firstName');
        $payment->last_name = $request->input('floating_lastName');
        $payment->address = $request->input('floating_address');
        $payment->country = $request->input('floating_country');
        $payment->phone_no = $request->input('floating_phone');
        $payment->postal = $request->input('floating_Postal');
        $payment->card_no = $request->input('floating_cardNumber');
        $payment->expire = $request->input('floating_Expires');
        $payment->cvv = $request->input('floating_CVV');
        $payment->payment_method = $request->input('payment');

        $payment->save();

        return redirect()->route('account.billing',['id' => $id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $paymentId = null)
    {
        if (Str::contains(Route::currentRouteName(), 'account.billing.delete')) {

            $product = Payment::find($paymentId);
            $product->delete();
        }else {
            $product = Payment::find($id);
            $product->delete();
        }
        return redirect()->back();
    }
}
