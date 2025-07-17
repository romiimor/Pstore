<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>PStore - Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4">Your Cart</h2>

  @if(count(session('cart', [])) == 0)
    <div class="alert alert-info">Your cart is empty.</div>
  @else
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach(session('cart', []) as $index => $item)
          <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['price'] }}</td>
            <td>
              <form method="POST" action="/cart/remove">
                @csrf
                <input type="hidden" name="index" value="{{ $index }}">
                <button class="btn btn-sm btn-danger">Remove</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <a href="/checkout" class="btn btn-warning">Proceed to Checkout</a>
  @endif

</div>
</body>
</html>
