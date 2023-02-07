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
<h1 class="text-center ">Edit {{$product->name}} product</h1>
<div class="align-items-center d-flex justify-content-center" >
    <form action="{{ route('products.update', $product->id) }}" method="post" class="productcard w-50 gap-3 d-flex flex-column justify-content-center m-4">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description"
                name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price"
                value="{{ old('price', $product->price) }}">
        </div>

        <div class="form-group">
            <label for="quantity">quantity</label>
            <input type="number" step="1" class="form-control" id="quantity" name="quantity"
                value="{{ old('quantity', $product->quantity) }}">
        </div>

        <button type="submit" class="btn btn-outline-success">Update Product</button>
    </form>
</div>
</body>

</html>