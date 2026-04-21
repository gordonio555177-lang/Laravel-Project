<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Employees</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>



<div class="container">

  <h1>Employees</h1>



  <form action="/employees123" method="POST" class="employee-form">

    @csrf

    

    <div class="form-group">

      <label for="f_name">First Name:</label>

      <input type="text" id="f_name" name="f_name">

    </div>

    <div class="form-group">

      <label for="l_name">Last Name:</label>

      <input type="text" id="l_name" name="l_name">

    </div>
    

    <div class="form-group">

      <label for="job_title">Job Title:</label>

      <input type="text" id="job_title" name="job_title">
    </div>

    <div class="form-group">

      <label for="salary">Salary:</label>

      <input type="text" id="salary" name="salary">

    

    <button type="submit" class="btn-submit">Save</button>

  </form>



  <hr>



  <table class="product-table">

    <thead>

      <tr>

        <th>ID</th>

        <th>First Name</th>
        <th>Last Name</th>
        <th>Job Title</th>
        <th>Salary</th>

      </tr>

    </thead>

    <tbody>

      @foreach($items as $emp)

      <tr>

        <td>{{ $emp->id }}</td>
        <td>{{ $emp->first_name }}</td>
        <td>{{$emp->last_name}}</td>
        <td>{{ $emp->job_title }}</td>
        <td>{{ $emp->salary }}</td>
      </tr>

      @endforeach

    </tbody>

  </table>

</div>



</body>

</html>