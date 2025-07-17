<?php
$title = "PStore - Home";
$products = [
    [
        'name' => 'Product 1',
        'desc' => 'iPhone X dengan desain elegan, performa tinggi, dan kamera berkualitas. Cocok untuk kebutuhan sehari-hari dengan harga terjangkau.',
        'img' => '/images/product1.jpg',
        'price' => 'Rp 3.500.000'
    ],
    [
        'name' => 'Product 2',
        'desc' => 'iPhone 11 menghadirkan performa kencang, kamera ganda untuk foto menakjubkan, serta baterai lebih awet. Pilihan favorit pelanggan.',
        'img' => '/images/product2.jpg',
        'price' => 'Rp 4.000.000'
    ],
    [
        'name' => 'Product 3',
        'desc' => 'iPhone 12 dengan layar Super Retina XDR dan desain flat-edge modern. Mendukung 5G untuk kecepatan internet tinggi.',
        'img' => '/images/product3.jpg',
        'price' => 'Rp 3.750.000'
    ],
    [
        'name' => 'Product 4',
        'desc' => 'iPhone 13/14/15 hadir dengan kamera lebih canggih, prosesor terbaru, dan ketahanan baterai luar biasa. Tersedia untuk Anda.',
        'img' => '/images/product4.jpg',
        'price' => 'Rp 5.000.000'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f9f9f9;
    }
    .navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .nav-link.active, .nav-link:hover {
      color: #d4af37 !important;
    }
    .hero {
      background: linear-gradient(90deg, #212529, #343a40);
      color: #fff;
      padding: 6rem 0;
      text-align: center;
      background-image: url('/images/hero-bg.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero > .container {
      position: relative;
      z-index: 2;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      color: #ddd;
    }
    .btn-gold {
      background: linear-gradient(45deg, #d4af37, #c59d28);
      border: none;
      color: #000;
      font-weight: 600;
    }
    .btn-gold:hover {
      background: linear-gradient(45deg, #c59d28, #d4af37);
      color: #000;
    }
    .section-title {
      text-align: center;
      margin-bottom: 3rem;
      font-size: 2.5rem;
      font-weight: 700;
      color: #343a40;
      position: relative;
    }
    .section-title::after {
      content: "";
      display: block;
      width: 60px;
      height: 3px;
      background-color: #d4af37;
      margin: 1rem auto 0;
      border-radius: 2px;
    }
    .product-section {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(6px);
      border-radius: 1rem;
      padding: 3rem 2rem;
      margin-bottom: 2.5rem;
      box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-section:hover {
      transform: translateY(-5px);
      box-shadow: 0 1rem 2rem rgba(0,0,0,0.15);
    }
    .product-section img {
      width: 100%;
      max-height: 350px;
      object-fit: cover;
      border-radius: 0.75rem;
      box-shadow: 0 0.25rem 1rem rgba(0,0,0,0.1);
    }
    .price-badge {
      background-color: #d4af37;
      color: #000;
      padding: 0.5rem 1rem;
      border-radius: 0.4rem;
      font-weight: bold;
      display: inline-block;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }
    .product-desc {
      font-size: 1.1rem;
      line-height: 1.6;
      color: #555;
    }
    footer {
      background-color: #212529;
      color: #fff;
      margin-top: 4rem;
    }
    footer a {
      color: #d4af37;
      text-decoration: none;
      margin: 0 0.25rem;
    }
    footer a:hover {
      text-decoration: underline;
    }
    .social-icons a {
      font-size: 1.25rem;
      margin: 0 0.5rem;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">PStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <div class="container">
    <h1>Welcome to PStore</h1>
    <p>Your one-stop shop for premium iPhones with trusted quality and best price.</p>
    <a href="#products" class="btn btn-gold btn-lg">Shop Now</a>
  </div>
</div>

<?php if(session('success')): ?>
  <div class="container mt-4">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session('success') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
<?php endif; ?>


<!-- Products Section -->
<div class="container my-5" id="products">
  <h2 class="section-title">Our Products</h2>
  <?php foreach ($products as $index => $product): ?>
    <div class="row product-section align-items-center <?= $index % 2 ? 'flex-row-reverse' : '' ?>">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= htmlspecialchars($product['img']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h4 class="fw-bold mb-3"><?= htmlspecialchars($product['name']) ?></h4>
        <div class="price-badge"><?= htmlspecialchars($product['price']) ?></div>
        <p class="product-desc mb-4"><?= htmlspecialchars($product['desc']) ?></p>
        <a href="/products" class="btn btn-gold btn-lg">Lihat Semua Produk</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<footer class="text-center py-4">
  <div class="container">
    <p class="mb-1">&copy; <?= date('Y') ?> PStore. All rights reserved.</p>
    <div class="social-icons">
      <a href="#"><i class="bi bi-instagram"></i> Instagram</a> |
      <a href="#"><i class="bi bi-facebook"></i> Facebook</a> |
      <a href="#"><i class="bi bi-whatsapp"></i> WhatsApp</a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</body>
</html>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
