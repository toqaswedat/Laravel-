<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="app.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>products</title>
</head>
<body>
<h1 class="text-center ">Products</h1>
<a href="{{ route('products.create') }}" class="btn btn-outline-success m-3">Create a new product</a>

<div class="d-flex flex-wrap justify-content-center">
@foreach($products as $product)
<div class="productcard w-25 gap-3 d-flex flex-column justify-content-center m-4  align-items-center">
<img src="{{ asset($product->image) }}" alt="Product Image" class="w-75 p-2">
  <h3 class="p-2">{{ $product->name }}</h3>
  <p class="text-center m-4 ">
  {{ $product->description }}
</p>
  <h3 class="price">${{ $product->price }}</h3>
  <div class="buttons">
    <a class="btn btn-outline-success" href="/products/{{$product->id}}/edit">
        Edit
    </a>

    <a href="#" class="btn btn-danger" data-id="{{ $product->id }}">       
        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
        </form>
    </a>

  </div>
</div>
@endforeach

<!-- <table >
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/products/{{$product->id}}/edit">Edit</a></td>
            <td><a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">       <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form></a></td>

        </tr>
 

        @endforeach
    </tbody>
</table> -->
<!-- </div> -->



<script>
  $('.delete').on('click', function (e) {
      e.preventDefault();
      var id = $(this).data('id');
      var confirmation = confirm("Are you sure you want to delete this product?");
      if (confirmation) {
          // Submit the form to the server to delete the product
          $('#delete-form-'+id).submit();
      }
  });
</script>

</body>
</html>