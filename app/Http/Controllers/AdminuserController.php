<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class AdminuserController extends Controller
{

       public function adminuser(){
             
               $data = User::all();
             return view('admin.adminuser' , compact('data'));
       }

        public function adduser(){

               return view('admin.adduser');

        }


          public function saveuser(Request $request){
             
               $data = new User();

               $data->name = $request->input('name');
               $data->email = $request->input('email');
               $data->number = $request->input('number');
               $data->address = $request->input('address');
               $data->password = bcrypt($request->input('password')); // Hash the password and set it
               $data->save();
               return redirect()->back()->with('message' , 'User Added Successfully');

          }

          public function edituser($id){

              $data = User::where('id' , '=' , $id)->first();
              return view('admin.edituser' , compact ('data'));

          }
          public function updateuser(Request $request , $id){
             
              $data = User::find($id);

              $data->name = $request->input('name');
              $data->email = $request->input('email');
              $data->number = $request->input('number');
              $data->address = $request->input('address');
              $data->password = bcrypt($request->input('password')); // Hash the password and set it
              $data->save();
              return redirect()->back()->with('message' , 'User Updated Successfully');

         }

         public function deleteuser($id){

              
              $data = User::where('id' ,"=" , $id)->delete();
              
              return redirect()->back()->with('message' , 'User Deleted Successfully');


         }




      
}