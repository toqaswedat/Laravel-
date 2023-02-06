<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/create.blade.php -->
<h1>Create a new product</h1>

<form action="{{ route('products.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description" required></textarea>
  </div>
  <div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity" required>
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01" required>
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" id="image" name="image" required>
  </div>
  <div class="form-group">
  <input type="hidden" name="user_id" value="{{ $userId }}">
</div>
<div class="form-group">
<input type="hidden" name="category_id" value="3">
</div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</body>
</html>