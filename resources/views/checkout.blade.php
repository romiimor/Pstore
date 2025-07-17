<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PStore - Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4">Checkout</h2>
  <form method="POST" action="/order">
    @csrf
    <div class="mb-3">
      <label>Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label>Address</label>
      <textarea class="form-control" name="address" required></textarea>
    </div>
    <div class="mb-3">
      <label>Phone</label>
      <input type="text" class="form-control" name="phone" required>
    </div>
    <button class="btn btn-dark">Place Order</button>
  </form>
</div>
</body>
</html>
