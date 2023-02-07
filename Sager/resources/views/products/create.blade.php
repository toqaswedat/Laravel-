<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/create.blade.php -->

<h1 class="text-center ">Create a new product</h1>
<div class="align-items-center d-flex justify-content-center" >
<form action="{{ route('products.store') }}" method="post" class="productcard w-50 gap-3 d-flex flex-column justify-content-center m-4">
  @csrf
  <div class="form-group ">
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
<input type="hidden" name="category_id" value="9">
</div>
  <button type="submit" class=" btn btn-outline-success">Create</button>
</form>
</div>
</body>
</html>