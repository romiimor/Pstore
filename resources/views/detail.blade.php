<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $product['name'] }} - PStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">PStore</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product['img'] }}" class="img-fluid rounded" alt="{{ $product['name'] }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product['name'] }}</h1>
            <p class="text-muted">{{ $product['desc'] }}</p>
            <h3 class="text-warning">{{ $product['price'] }}</h3>
            <div class="rating mb-3">⭐⭐⭐⭐☆</div>
            <button class="btn btn-dark">Add to Cart</button>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0">&copy; {{ date('Y') }} PStore. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
