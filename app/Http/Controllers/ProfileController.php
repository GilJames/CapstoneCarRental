<?php

namespace App\Http\Controllers;
use  App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    // public function myprofile ($id){

    //    $data = User::find($id);
    //     return view('myprofile' , compact('data'));
    // }

    public function myprofile ($id){

        $data = User::find($id);
        return view('myprofile' , compact('data'));
     }

    //  public function editprofile($id){

    //       $data = User::where('id' , '=' , $id);
    //       return view('editprofile' , compact('data'));

    //  }


        public function editprofile($id){

            $data = User::where('id' , '=' , $id)->first();
            return view('editprofile' , compact('data'));

        }

        public function updateprofile(Request $request , $id){
            
            $data = User::find($id);

            $data->name = $request->input('name');
            $data->email = $request->input('email');
            $data->number = $request->input('number');
            $data->address = $request->input('address');
            $data->password = bcrypt($request->input('password')); // Hash the password and set it
            $data->save();
            return redirect()->back()->with('message' , 'User Updated Successfully');

       }
 
      
}
