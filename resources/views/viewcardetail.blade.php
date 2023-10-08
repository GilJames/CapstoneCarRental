@extends('layouts.rentcar')
@section('title','Car Listing')

@section('content')  
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>View Car Details</h1>
      <!-- </div>
      <ul class="coustom-breadcrumb">
      <li><a href="availablecars">Cars</a></li>
        <li>Car Details</li>
      </ul>
    </div> -->
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<br>

<section id="listing_img_slider">



  <div><img src="{{asset('../uploads/car/'.$data->image)}}" class="img-responsive" alt="image" width="900" height="560"></div>
  


</section>
<!--/Listing-Image-Slider-->




<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>{{$data->carname}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>{{$data->carprice}}</p>Per Day
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5>{{$data->carmodel}}</h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5>{{$data->cartype}}</h5>
              <p>Car Type</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5>{{$data->carseats}}</h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
          
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Vehicle Status</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                
                <p>Fueltype: {{$data->fueltype}}</p>
                <p>Car History: {{$data->carhistory}}</p>

              </div>
              
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <tbody>
                  <p>Car Type: <b> {{$data->cartype}}</p>
                  <p >
                    Car Status: 
                  @if($data->status == 'notavailable')
                         <button style="color:red">Not Available</button>
                        @elseif($data->status == 'available')
                        <button style="color:green">Available</button>
                   @endif 
                  </p>
                </tbody>
                </table>
              </div>
            </div>
          </div>
          
        </div>

      

   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book here!</h5>
          </div>
          <!-- <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
            </div>

          </form> -->
          <a href="" class="btn">Book Vehicle<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>

    
  </div>
</section>
<!--/Listing-detail--> 

@endsection



