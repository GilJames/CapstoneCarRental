<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

      <div class="container">
        <br> <br>
        <h2 style="text-align:center">Edit Car</h2>
        <br>
        @if(session('message'))
        <div class="alert alert-success" role="alert">{{session('message')}}</div>
        @endif
        
      <form action="{{url('uploadvehicle/'.$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">CarName</label>
            <input type="text" class="form-control" name="carname" value="{{$data->carname}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rent Fee Per Day</label>
            <input type="text" class="form-control" name="carprice" value="{{$data->carprice}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car Model</label>
            <input type="text" class="form-control" name="carmodel" value="{{$data->carmodel}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car Seats</label>
            <input type="text" class="form-control" name="carseats" value="{{$data->carseats}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car History</label>
            <input type="text" class="form-control" name="carhistory" value="{{$data->carhistory}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fuel Type</label>
            <input type="text" class="form-control" name="fueltype" value="{{$data->fueltype}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car Type</label>
            <input type="text" class="form-control" name="cartype" value="{{$data->cartype}}">
        </div>
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car Image</label>
            <input type="file" class="form-control" name="image" value="">
        </div>
      
        <img src="{{ asset('/uploads/car/' . $data->image) }}" alt="image" width="80px" height="80px">
        <br>

        <div class="mb-3">
            <br>
        <Label>Car Status</Label>
        <select class="form-select" aria-label="Default select example" name="status">
        <option value="available">Available</option>
        <option value="notavailable">Not Available</option>
        </select>
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('admincar')}}" class="btn btn-danger">Back</a>
        </div>
        </form>
      </div>
    
</body>
</html>