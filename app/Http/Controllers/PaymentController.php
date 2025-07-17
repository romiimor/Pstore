<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $cart = session('cart', []);
        $total = array_sum(array_map(function ($item) {
            return (int) preg_replace('/[^0-9]/', '', $item['price']);
        }, $cart));

        $transaction = Transaction::create([
            'customer_name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'total' => $total,
        ]);

        session()->put('last_transaction', [
            'transaction' => $transaction,
            'cart' => $cart
        ]);

        session()->forget('cart');

        return redirect()->route('invoice');
    }

    public function invoice()
    {
        if (!session()->has('last_transaction')) {
            return redirect('/products')->with('error', 'No recent transaction found.');
        }

        $data = session('last_transaction');
        return view('invoice', [
            'transaction' => $data['transaction'],
            'cart' => $data['cart'],
        ]);
    }
}
