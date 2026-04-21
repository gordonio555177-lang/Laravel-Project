<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class ="container">
    <h1>Edit Categories</h1>
    <form action="/categories/{{ $emp->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Category:</label>
        <input type="text" name="categories123" value="{{ $emp->category_name}}">
    </div>
<button type="submit" class="btn-update">Update</button>
</form>
<br>
<a href="/categories" class="btn-back">Back</a>
</div>
</body>
</html>