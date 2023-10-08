<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admincar;
use Illuminate\Support\Facades\File;


class AdmincarController extends Controller
{
   

        public function admincar(){

            $data = Admincar::get();
            return view('admincar.admincar' , compact('data'));
        }


        public function addcar(){
            return view('admincar.addcar');
        }
        public function savecar(Request $request){

            $data = new Admincar();

            $data->carname = $request->input('carname');
            $data->carprice = $request->input('carprice');
            $data->carmodel = $request->input('carmodel');
            $data->carseats = $request->input('carseats');
            $data->carhistory = $request->input('carhistory');
            $data->fueltype = $request->input('fueltype');
            $data->cartype = $request->input('cartype');
            $data->status = $request->input('status');
            
            if($request->hasfile('image'))
                {

                $file =$request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.' .$extension;
                $file->move('uploads/car/' ,$filename);
                $data->image = $filename;
                $data->save();
                }
              return redirect()->back()->with('message' ,'Car Added Successfuly');

        }

        public function editcar($id){

            $data = Admincar::where('id' , '=' , $id)->first();
            return view('admincar.edit' , compact('data'));

        }
        public function uploadcars(Request $request , $id){

            $data = Admincar::find($id);

            $data->carname = $request->input('carname');
            $data->carprice = $request->input('carprice');
            $data->carmodel = $request->input('carmodel');
            $data->carseats = $request->input('carseats');
            $data->carhistory = $request->input('carhistory');
            $data->fueltype = $request->input('fueltype');
            $data->cartype = $request->input('cartype');
            $data->status = $request->input('status');
            if($request->hasfile('image'))
            {
                $destination = '/..uploads/car/'.$data->image;
                

                if(File::exists($destination)){
                    File::delete($destination);
                }

            $file =$request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/car/' ,$filename);
            $data->image = $filename;
          
            }
            $data->save();
            return redirect('../admincar')->with('message' , 'Car Updated Successfully');
     
        }


        public function delete($id){


            $data = Admincar::where('id' , '=' , $id)->first(); 

            $destination = '../uploads/cars/'.$data->image;

            if(File::exists($destination)){
                File::delete($destination);

            }
            $data->delete();

            return redirect('admincar')->with('message' , 'Car Deleted Successfully');

             
        }
}
