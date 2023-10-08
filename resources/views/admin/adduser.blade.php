<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Booking</title>
</head>
<body>


<div class="container"> <br> <br>
       <h2 style="text-align:Center;">Add User Account</h2>

        @if(session('message'))
        <div class="alert alert-success" role="alert">{{session('message')}}</div>
        @endif

<form action ="{{url('saveuser')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Fullname" name="name" value="">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" value="">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="number" class="form-control" placeholder="Enter your phone number" name="number" value="">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Permanent Address</label>
    <input type="text" class="form-control" placeholder="Enter you permanent address" name="address" value="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" value="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{url('../adminuser')}}" class="btn btn-danger">Back</a>
</form>
</div>
    
</body>
</html>