<?php $title = "PStore - Contact Us"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .contact-info i {
      font-size: 1.2rem;
      color: #ffc107;
      margin-right: 8px;
    }
    .form-control:focus {
      border-color: #ffc107;
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
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
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link active" href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contact Content -->
<div class="container my-5">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row g-5">
    <div class="col-md-6">
      <form action="/contact" method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" name="name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Send Message</button>
      </form>
    </div>

    <div class="col-md-6">
      <h5>Our Store</h5>
      <p class="contact-info"><i class="bi bi-geo-alt-fill"></i> Jl. Lenteng Agung Raya No.123, Jakarta Selatan</p>
      <p class="contact-info"><i class="bi bi-envelope-fill"></i> support@pstore.id</p>
      <p class="contact-info"><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</p>

      <h5 class="mt-4">Follow Us</h5>
      <p>
        <a href="#" class="text-warning text-decoration-none me-3"><i class="bi bi-instagram"></i> Instagram</a>
        <a href="#" class="text-warning text-decoration-none me-3"><i class="bi bi-facebook"></i> Facebook</a>
        <a href="#" class="text-warning text-decoration-none"><i class="bi bi-whatsapp"></i> WhatsApp</a>
      </p>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
  <p class="mb-1">&copy; <?= date('Y') ?> PStore. All rights reserved.</p>
</footer>

<!-- Bootstrap + Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
