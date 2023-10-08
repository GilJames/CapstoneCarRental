<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admincar;

class HomesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function availablecars(){
        $data = Admincar::all();
        return view('availablecars' ,  compact('data'));
    }

    public function viewcardetails($id){

        $data = Admincar::where('id' ,'=', $id)->first();
        return view('viewcardetail' , compact('data'));


    }



       public function searchcar(Request $request){

           $search = $request->input('search');

           $data = Admincar::query()
           ->where('carname' ,'LIKE' , "%{$search}%")
           ->orWhere('carprice' , 'LIKE' , "%{$search}%")
           ->orWhere('carprice' , 'LIKE' , "%{$search}%")
           ->get();

         return view('availablecars' , compact('data'));
       }




}
