<?php
$title = "PStore - About";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .nav-link.active, .nav-link:hover { color: #ffc107 !important; }
    .hero-section {
      background-color: #343a40;
      color: #fff;
      padding: 4rem 0;
      text-align: center;
    }
    .about-section {
      padding: 3rem 0;
    }
    .highlight {
      color: #ffc107;
      font-weight: bold;
    }
    .map-section {
      padding: 3rem 0;
      background-color: #f8f9fa;
    }
    .map-embed {
      border: 0;
      width: 100%;
      height: 400px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">PStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/products">Products</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="hero-section">
  <div class="container">
    <h1 class="fw-bold">About <span class="highlight">PStore</span></h1>
    <p>Your trusted destination for original and quality iPhones</p>
  </div>
</section>

<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="/images/store-banner1.jpg" alt="PStore Interior" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3">Who We Are</h3>
        <p>
          <span class="highlight">PStore</span> adalah toko iPhone terpercaya yang menyediakan produk-produk Apple original dengan harga bersaing. Kami hadir untuk memberikan kemudahan bagi pelanggan dalam mendapatkan iPhone impian mereka, lengkap dengan garansi dan layanan purna jual terbaik.
        </p>
        <p>
          Kami percaya bahwa setiap pelanggan layak mendapatkan pengalaman belanja yang <span class="highlight">mudah</span>, <span class="highlight">aman</span>, dan <span class="highlight">nyaman</span>. Dengan tim profesional dan ramah, kami selalu siap membantu Anda menemukan pilihan terbaik sesuai kebutuhan.
        </p>
        <p>
          PStore memiliki koleksi lengkap mulai dari <span class="highlight">iPhone X</span> hingga <span class="highlight">iPhone 15</span>, dengan berbagai varian warna dan kapasitas. Semua produk kami dijamin original dan bergaransi.
        </p>
        <a href="/products" class="btn btn-warning mt-3">Lihat Produk Kami</a>
      </div>
    </div>
  </div>
</section>

<section class="map-section">
  <div class="container">
    <h3 class="text-center fw-bold mb-4">Find Us at PStore Lenteng Agung</h3>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <iframe
          class="map-embed"
          src="//www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7931.0901310307845!2d106.836406!3d-6.323325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed0038cf9353%3A0x10024e93ac47e8ce!2sPstore%20Lenteng%20Agung!5e0!3m2!1sen!2sid!4v1751681480807!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-4">
  <p class="mb-1">&copy; <?= date('Y') ?> PStore. All rights reserved.</p>
  <p class="mb-0">
    Follow us:
    <a href="#" class="text-warning text-decoration-none">Instagram</a> |
    <a href="#" class="text-warning text-decoration-none">Facebook</a> |
    <a href="#" class="text-warning text-decoration-none">WhatsApp</a>
  </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
