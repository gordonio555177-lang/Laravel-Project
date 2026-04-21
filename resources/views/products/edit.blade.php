<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class ="container">
    <h1>Edit Product</h1>
    <form action="/products/{{ $item->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name123" value="{{ $item->name}}">
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="text" name="price123" value="{{ $item->price}}">
    </div>
    <div class="form-group">
        <label>Category:</label>
        <select id="categories123" name="category123">
        <option value="">Select a category</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
        @endforeach
      </select>
<button type="submit" class="btn-update">Update</button>
</form>
<br>
<a href="/products" class="btn-back">Back</a>
</div>
</body>
</html>