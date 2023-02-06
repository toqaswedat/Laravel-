<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="app.css" /> -->
    <title>products</title>
</head>
<body>
<div class="container">
    <!-- resources/views/products/index.blade.php -->
<a href="{{ route('products.create') }}">Create a new product</a>

<table >
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
</table>
</div>



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