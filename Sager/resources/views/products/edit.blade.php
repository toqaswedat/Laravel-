<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('products.update', $product->id) }}" method="post">
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

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

</body>

</html>