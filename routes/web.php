<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Halaman statis
|
*/
Route::get('/', fn () => view('home'));
Route::get('/about', fn () => view('about'));
Route::get('/contact', fn () => view('contact'));
Route::get('/products', fn () => view('products'));

/*
|--------------------------------------------------------------------------
| Product Detail Page
|--------------------------------------------------------------------------
*/
Route::get('/product/{id}', function ($id) {
    $products = [
        1 => ['name' => 'Product 1', 'desc' => 'High-quality item.', 'img' => '/images/product1.jpg', 'price' => 'Rp 3.500.000', 'promo' => true],
        2 => ['name' => 'Product 2', 'desc' => 'Best seller.', 'img' => '/images/product2.jpg', 'price' => 'Rp 4.000.000', 'promo' => false],
        3 => ['name' => 'Product 3', 'desc' => 'Limited stock.', 'img' => '/images/product3.jpg', 'price' => 'Rp 3.750.000', 'promo' => true],
        4 => ['name' => 'Product 4', 'desc' => 'New arrival.', 'img' => '/images/product4.jpg', 'price' => 'Rp 5.000.000', 'promo' => false],
    ];

    if (!isset($products[$id])) {
        abort(404);
    }

    return view('detail', ['product' => $products[$id]]);
});


/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
|
| Semua route untuk fitur cart
|
*/

// Tampilkan halaman keranjang
Route::get('/cart', function () {
    $cart = session('cart', []);
    return view('cart', ['cart' => $cart]);
});

// Tambahkan item ke keranjang
Route::post('/cart/add', function (Request $request) {
    $item = $request->only(['id', 'name', 'price']);
    session()->push('cart', $item);

    return redirect('/cart')->with('success', 'Product added to cart!');
});

// Hapus item dari keranjang
Route::post('/cart/remove', function (Request $request) {
    $index = $request->input('index');
    $cart = session('cart', []);

    if (isset($cart[$index])) {
        unset($cart[$index]);
        session(['cart' => array_values($cart)]);
    }

    return redirect('/cart')->with('success', 'Item removed from cart.');
});


/*
|--------------------------------------------------------------------------
| Checkout Page
|--------------------------------------------------------------------------
*/
Route::get('/checkout', function () {
    return view('payment');
});

Route::post('/payment/process', function (Illuminate\Http\Request $request) {
    // Validasi dan proses pembayaran
    // (Bisa kirim ke email, simpan ke database, dll.)

    session()->forget('cart'); // Hapus cart setelah pembayaran

    return redirect('/')->with('success', 'Payment successful!');
});


Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');


use App\Http\Controllers\CheckoutController;

Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/invoice', [CheckoutController::class, 'invoice'])->name('checkout.invoice');

use App\Http\Controllers\PaymentController;

Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
Route::get('/invoice', [PaymentController::class, 'invoice'])->name('invoice');
