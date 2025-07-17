<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PStore - Product Detail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  @php
    $products = [
      1 => ['name' => 'iPhone X', 'desc' => 'OLED Display, Face ID', 'img' => '/images/iphone-x.jpg', 'price' => 'Rp 3.500.000', 'specs' => ['Display' => '5.8"', 'Chip' => 'A11 Bionic', 'Camera' => '12MP']],
      2 => ['name' => 'iPhone 11', 'desc' => 'Dual Camera, A13 Bionic', 'img' => '/images/iphone-11.jpg', 'price' => 'Rp 5.000.000', 'specs' => ['Display' => '6.1"', 'Chip' => 'A13 Bionic', 'Camera' => '12MP']],
      3 => ['name' => 'iPhone 12', 'desc' => '5G, Ceramic Shield', 'img' => '/images/iphone-12.jpg', 'price' => 'Rp 6.500.000', 'specs' => ['Display' => '6.1"', 'Chip' => 'A14 Bionic', 'Camera' => '12MP']],
      4 => ['name' => 'iPhone 13', 'desc' => 'A15 Bionic, Cinematic', 'img' => '/images/iphone-13.jpg', 'price' => 'Rp 7.500.000', 'specs' => ['Display' => '6.1"', 'Chip' => 'A15 Bionic', 'Camera' => '12MP']],
      5 => ['name' => 'iPhone 14', 'desc' => 'Crash Detection', 'img' => '/images/iphone-14.jpg', 'price' => 'Rp 10.000.000', 'specs' => ['Display' => '6.1"', 'Chip' => 'A15 Bionic', 'Camera' => '12MP']],
      6 => ['name' => 'iPhone 15', 'desc' => 'Dynamic Island, USB-C', 'img' => '/images/iphone-15.jpg', 'price' => 'Rp 12.000.000', 'specs' => ['Display' => '6.1"', 'Chip' => 'A16 Bionic', 'Camera' => '48MP']],
    ];
    $product = $products[$id];
  @endphp

  <div class="row">
    <div class="col-md-6">
      <img src="{{ $product['img'] }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h2>{{ $product['name'] }}</h2>
      <p class="text-muted">{{ $product['desc'] }}</p>
      <h4 class="text-warning">{{ $product['price'] }}</h4>
      <h5>Specifications</h5>
      <ul>
        @foreach($product['specs'] as $key => $value)
          <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
      </ul>
      <form method="POST" action="/cart/add">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="name" value="{{ $product['name'] }}">
        <input type="hidden" name="price" value="{{ $product['price'] }}">
        <button class="btn btn-dark mt-3">Add to Cart</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
