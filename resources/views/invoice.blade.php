@extends('layouts.app')

@section('title', 'Invoice Pembayaran')

@section('content')
<div class="container py-5">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="mb-4 text-success">Pembayaran Berhasil!</h2>

            <h5>Informasi Pelanggan:</h5>
            <p><strong>Nama:</strong> {{ $transaction->customer_name }}</p>
            <p><strong>Alamat:</strong> {{ $transaction->address }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $transaction->payment_method }}</p>

            <h5 class="mt-4">Detail Pesanan:</h5>
            <ul class="list-group mb-3">
                @foreach($cart as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item['name'] }}
                        <span>{{ $item['price'] }}</span>
                    </li>
                @endforeach
            </ul>

            <p><strong>Total:</strong> Rp {{ number_format($transaction->total, 0, ',', '.') }}</p>

            <a href="/products" class="btn btn-primary mt-3">Kembali ke Produk</a>
        </div>
    </div>
</div>
@endsection
