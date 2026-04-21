<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Categories</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>



<div class="container">

  <h1>Categories</h1>



  <form action="/categories123" method="POST" class="category-form">
    @csrf
    <div class="form-group">
      <label for="categories123">Category Name:</label>
      <input type="text" id="category_name" name="categories123">

    </div>
    

    <button type="submit" class="btn-submit">Save</button>

  </form>

  <hr>

  <table class="product-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Action</th>
      </tr>

    </thead>

    <tbody>

      @foreach($items as $emp)

      <tr>

        <td>{{ $emp->id }}</td>
        <td>{{ $emp->category_name}}</td>
        <td>
        <a href="/categories/{{ $emp->id }}/edit">Edit</a>
        <form action="/categories/{{ $emp->id }}" method="POST"
        style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    </td>
      </tr>
      @endforeach
    </tbody>

  </table>

</div>



</body>

</html>