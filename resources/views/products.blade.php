<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PStore - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
        }
        .badge-promo {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #dc3545;
            color: #fff;
            padding: 0.35em 0.6em;
            font-size: 0.75rem;
            border-radius: 5px;
        }
        .rating {
            color: #f0c040;
        }
        .navbar-brand {
            font-weight: bold;
        }
        footer {
            background-color: #1c1c1c;
            color: #fff;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">PStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="/products">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h2 class="mb-4 text-center">Browse Our iPhone Collection</h2>

    <!-- Search / Filter Form -->
    <form method="GET" action="/products" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="q" class="form-control" placeholder="Search by model (e.g. 13 Pro)" value="{{ request('q') }}">
        </div>
        <div class="col-md-4">
            <select name="model" class="form-select">
                <option value="">All Models</option>
                @foreach(['X', '11', '12', '13', '14', '15'] as $m)
                    <option value="iPhone {{ $m }}" {{ request('model') == "iPhone $m" ? 'selected' : '' }}>iPhone {{ $m }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100">Filter</button>
        </div>
    </form>

    @php
        $products = [
            ['name' => 'iPhone X', 'desc' => 'OLED Display, Face ID', 'img' => '/images/iphone-x.jpg', 'price' => 'Rp 3.500.000', 'promo' => true],
            ['name' => 'iPhone 11', 'desc' => 'Dual Camera, A13 Bionic', 'img' => '/images/iphone-11.jpg', 'price' => 'Rp 5.000.000', 'promo' => false],
            ['name' => 'iPhone 12', 'desc' => '5G, Ceramic Shield', 'img' => '/images/iphone-12.jpg', 'price' => 'Rp 6.500.000', 'promo' => false],
            ['name' => 'iPhone 13', 'desc' => 'A15 Bionic, Cinematic Mode', 'img' => '/images/iphone-13.jpg', 'price' => 'Rp 7.500.000', 'promo' => true],
            ['name' => 'iPhone 14', 'desc' => 'Crash Detection, Photonic Engine', 'img' => '/images/iphone-14.jpg', 'price' => 'Rp 10.000.000', 'promo' => false],
            ['name' => 'iPhone 15', 'desc' => 'Dynamic Island, USB-C', 'img' => '/images/iphone-15.jpg', 'price' => 'Rp 12.000.000', 'promo' => true],
        ];

        $filtered = collect($products)->filter(function ($item) {
            $q = strtolower(request('q', ''));
            $model = strtolower(request('model', ''));
            return (!$q || str_contains(strtolower($item['name']), $q))
                && (!$model || strtolower($item['name']) == $model);
        });
    @endphp

    @if($filtered->count() == 0)
        <div class="alert alert-warning">No products found. Try a different search or filter.</div>
    @endif

    <!-- ...head & nav tetap seperti sebelumnya -->

<div class="container">
    <h2 class="mb-4 text-center">Browse Our iPhone Collection</h2>

    <!-- Search / Filter Form -->
    <form method="GET" action="/products" class="row g-3 mb-4">
        <div class="col-md-8">
            <input type="text" name="q" class="form-control" placeholder="Search by model (e.g. 13 Pro)" value="{{ request('q') }}">
        </div>
        <div class="col-md-4">
            <select name="model" class="form-select">
                <option value="">All Models</option>
                @foreach(['X', '11', '12', '13', '14', '15'] as $m)
                    <option value="iPhone {{ $m }}" {{ request('model') == "iPhone $m" ? 'selected' : '' }}>iPhone {{ $m }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100">Filter</button>
        </div>
    </form>

    @php
        $products = [
            ['name' => 'iPhone X', 'desc' => 'OLED Display, Face ID', 'img' => '/images/iphone-x.jpg', 'price' => 'Rp 3.500.000', 'promo' => true],
            ['name' => 'iPhone 11', 'desc' => 'Dual Camera, A13 Bionic', 'img' => '/images/iphone-11.jpg', 'price' => 'Rp 5.000.000', 'promo' => false],
            ['name' => 'iPhone 12', 'desc' => '5G, Ceramic Shield', 'img' => '/images/iphone-12.jpg', 'price' => 'Rp 6.500.000', 'promo' => false],
            ['name' => 'iPhone 13', 'desc' => 'A15 Bionic, Cinematic Mode', 'img' => '/images/iphone-13.jpg', 'price' => 'Rp 7.500.000', 'promo' => true],
            ['name' => 'iPhone 14', 'desc' => 'Crash Detection, Photonic Engine', 'img' => '/images/iphone-14.jpg', 'price' => 'Rp 10.000.000', 'promo' => false],
            ['name' => 'iPhone 15', 'desc' => 'Dynamic Island, USB-C', 'img' => '/images/iphone-15.jpg', 'price' => 'Rp 12.000.000', 'promo' => true],
        ];

        $filtered = collect($products)->filter(function ($item) {
            $q = strtolower(request('q', ''));
            $model = strtolower(request('model', ''));
            return (!$q || str_contains(strtolower($item['name']), $q))
                && (!$model || strtolower($item['name']) == $model);
        });
    @endphp

    @if($filtered->count() == 0)
        <div class="alert alert-warning">No products found. Try a different search or filter.</div>
    @endif

    <div class="row g-4">
        @foreach ($filtered as $index => $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card position-relative h-100">
                    @if ($product['promo'])
                        <div class="badge-promo">Promo</div>
                    @endif
                    <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['desc'] }}</p>
                        <p class="price fw-bold text-warning">{{ $product['price'] }}</p>
                        <div class="rating mb-2">⭐⭐⭐⭐☆</div>
                        <div class="mt-auto d-flex gap-2">
                            <form method="POST" action="/cart/add" class="d-inline">
                                @csrf
                                <input type="hidden" name="name" value="{{ $product['name'] }}">
                                <input type="hidden" name="price" value="{{ $product['price'] }}">
                                <input type="hidden" name="img" value="{{ $product['img'] }}">
                                <button type="submit" class="btn btn-dark btn-sm">Add to Cart</button>
                            </form>
                            <a href="/product/{{ $index + 1 }}" class="btn btn-warning btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="text-center py-4 mt-5 bg-dark text-white">
    <p class="mb-1">&copy; {{ date('Y') }} PStore. All rights reserved.</p>
    <p class="mb-0">
        Follow us:
        <a href="#" class="text-warning text-decoration-none">Instagram</a> |
        <a href="#" class="text-warning text-decoration-none">Facebook</a> |
        <a href="#" class="text-warning text-decoration-none">WhatsApp</a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
