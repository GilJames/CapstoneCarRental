<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Profile</title>
</head>
<body>

    <div class="container"><br><br><br>
                <h2 style="text-align:center">Edit My Profile</h2>

                @if(session('message'))
                <div class="alert alert-success" role="alert">{{session('message')}}</div>
                @endif

<form action="{{url('updateprofile/'.$data->id)}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" name="name"  value="{{$data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email" value="{{$data->email}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number:</label>
    <input type="text" class="form-control" name="number" value="{{$data->number}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address:</label>
    <input type="text" class="form-control" name="address" value="{{$data->address}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Change Password:</label>
    <input type="text" class="form-control" name="password" >
  </div>
 
     <button type="submit" class="btn btn-primary">Submit</button>
  <a href="../myprofile/{{Auth::user()->id}}" class="btn btn-danger">Back</a>
  </form>
    </div>


 
    
</body>
</html>