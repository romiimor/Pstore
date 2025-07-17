<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class CheckoutController extends Controller
{



    public function process(Request $request)
    {
        $cart = session('cart', []);
        $total = array_sum(array_column($cart, 'price'));

        $transaction = Transaction::create([
            'customer_name'    => $request->name,
            'address'          => $request->address,
            'payment_method'   => $request->payment_method,
            'total'            => $total,
        ]);

        // Simpan cart ke dalam sesi sementara untuk ditampilkan di invoice
        session()->put('last_transaction', [
            'transaction' => $transaction,
            'cart' => $cart
        ]);

        session()->forget('cart');

        return redirect()->route('checkout.invoice');
    }


    public function invoice()
    {
        $data = session('last_transaction');

        if (!$data) {
        return redirect('/products')->with('error', 'Tidak ada transaksi ditemukan.');
        }

        return view('checkout.invoice', [
            'transaction' => $data['transaction'],
            'cart' => $data['cart'],
        ]);
    }

}
