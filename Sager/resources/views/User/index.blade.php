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
<a href="{{ route('User.create') }}">Create a new User</a>

<table >
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Users as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->email }}</td>
            <td><a href="/Users/{{$product->id}}/edit">Edit</a></td>
            <td><a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">       
                <form action="{{ route('User.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>