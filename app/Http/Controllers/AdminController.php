<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarDetail;
use DB;

class AdminController extends Controller
{

       public function administrator(){

         $data = CarDetail::get();

           return view('administrator' , compact('data'));
       }

       public function addcar(){
        return view('addingcar');
       }

       public function dashboard()
       {
           return view('admin.dashboard');
       }

  
    
}
