<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PStore - Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="mb-4 text-center">Payment Information</h2>

    @if (session('cart') && count(session('cart')) > 0)
    <div class="row">
        <!-- Order Summary -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header">Order Summary</div>
                <ul class="list-group list-group-flush">
                    @php
                        $total = 0;
                    @endphp
                    @foreach (session('cart') as $item)
                        @php
                            $price = preg_replace('/[^0-9]/', '', $item['price']);
                            $total += (int) $price;
                        @endphp
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{ $item['name'] }}</span>
                            <span>{{ $item['price'] }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between fw-bold">
                        <span>Total</span>
                        <span>Rp {{ number_format($total, 0, ',', '.') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Payment Form -->
        <div class="col-md-6">
            <form action="/payment/process" method="POST" class="card p-4">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Shipping Address</label>
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="payment_method" class="form-label">Payment Method</label>
                    <select name="payment_method" id="payment_method" class="form-select" required>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="cod">Cash on Delivery (COD)</option>
                        <option value="ewallet">E-Wallet</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Pay Now</button>
            </form>
        </div>
    </div>
    @else
        <div class="alert alert-info text-center">Your cart is empty. <a href="/products">Go back to products</a>.</div>
    @endif
</div>

</body>
</html>
