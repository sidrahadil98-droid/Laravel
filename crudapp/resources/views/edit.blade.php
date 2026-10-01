<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <x-navbar />
  <div class="container mt-4">
    <h1>Edit Student</h1>
    <form action="/edit" method="POST">
        @csrf

    <input type="hidden" name="uid" value="{{ $student['uid'] }}" >

     <div class="mb-3">
    <label for="username" class="form-label">Name</label>
    <input type="text" class="form-control" id="username" name="username" value="{{ $student['username'] }}" >
  </div>

    <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age"  value="{{ $student['age'] }}" >
  </div>

    <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $student['phone'] }}" >
  </div>

    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ $student['email'] }}" >
  </div>

  <button type="submit" class="btn btn-primary"> Update User</button>
    </form>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>