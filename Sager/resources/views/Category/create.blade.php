<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/Category/create.blade.php -->
<h1>Create a new Category</h1>

<form action="{{ route('Category.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
  <input type="hidden" name="user_id" value="{{ $userId }}">
</div>
<!-- <div class="form-group">
<input type="hidden" name="category_id" value="3">
</div> -->
  <button type="submit" class="btn btn-primary">Create</button>
</form>

</body>
</html>