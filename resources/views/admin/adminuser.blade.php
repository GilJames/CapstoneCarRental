<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Administrator Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="new_admin/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="new_admin/assets/css/ready.css">
	<link rel="stylesheet" href="new_admin/assets/css/demo.css">

    <link rel="stylesheet" href="new_admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="new_admin/css/custom.css">
	<link rel="preconnect" href="new_admin/https://fonts.googleapis.com">
    <link rel="preconnect" href="new_admin/https://fonts.gstatic.com" crossorigin>
    <link href="new_admin/https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="new_admin/https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
</head>
<body>


<!-- heading -->
@include('admin.header')
<!-- end heading -->

<!-- leftbar -->
@include('admin.leftbar')
<!-- end leftbar -->




<div class="body-overflow">
<div class="wrapper">   
	<div class="body-overlay">
		
      <div id="content">
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     <br><br><br>
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Manage  User</h2>
							 </div>

               @if(session('message'))
               <div class="alert alert-success" role="alert">{{session('message')}}</div>
               @endif

               <br> <br>
				<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
					<a href="{{url('adduser')}}" class="btn btn-success">
						<i class="material-icons">&#xE147;</i>
						    <span>Add New User</span>
							   </a>
							 </div>
					     </div>
					   </div>

					   <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Address</th>
                                <!-- <th>Password</th> -->
                                <th>Action</th>
                                </tr>
						  </thead>

                         @php 
                        $i = 1;
                        @endphp

                        @foreach( $data as $user)
                             <tr>
                                <td>{{$i++}}</td>
                                 <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->number}}</td>
                                <td>{{$user->address}}</td>   
                                <!-- <td>Password</td>  -->
                                <!-- <td>{{$user->password}}</td> -->


                                 <td>
							        <a href="{{url('editinguser/'.$user->id)}}" class="edit">
							        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							        </a>
                                </td>
              
                                <td>
							      <a href="{{url('deleteuser/'.$user->id)}}"" class="delete">
							      <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							      </a>
							    </td>
                             </tr>
                             @endforeach
                         </table>
                    </div>
                </div>


</body>
<script src="new_admin/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="new_admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="new_admin/assets/js/core/popper.min.js"></script>
<script src="new_admin/assets/js/core/bootstrap.min.js"></script>
<script src="new_admin/assets/js/plugin/chartist/chartist.min.js"></script>
<script src="new_admin/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="new_admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="new_admin/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="new_admin/assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="new_admin/assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="new_admin/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="new_admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="new_admin/assets/js/ready.min.js"></script>
<script src="new_admin/assets/js/demo.js"></script>

<script src="new_admin/js/jquery-3.3.1.slim.min.js"></script>
<script src="new_admin/js/popper.min.js"></script>
<script src="new_admin/js/bootstrap.min.js"></script>
<script src="new_admin/js/jquery-3.3.1.min.js"></script>
</html>










