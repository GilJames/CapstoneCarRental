<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmincarController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminuserController;
use  App\Http\Controllers\ProfileController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('adminlogin', function () {
    return view('admin/index');
});

Route::get('dashboard', function () {
    return view('admin/dashboard');
});
Route::resource('car_details',CarDetailController::class);

// Route::get('upload-car', function () {
//     return view('uploadcar');
// });

// Route::get('car-listing', function () {
//     return view('car-listing');
// });


// Route::post('post-to-server',[FileController::class, 'index']);



Auth::routes();
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('upload-car',[CarDetailController::class,'create']);
Route::get('car-listing',[CarDetailController::class,'index']);
Route::get('cardetail/{car_details}',[CarDetailController::class,'show']);
Route::get('myposts/{car_details}',[CarDetailController::class,'userpost']);
Route::get('editcar/{CarDetail}',[CarDetailController::class,'edit']);
Route::get('deletecar/{car_details}',[CarDetailController::class,'destroy']);
Route::get('updatecar/{car_details}',[CarDetailController::class,'update']);
Route::get('withdriver',[CarDetailController::class,'withdriver']);
Route::get('withoutdriver',[CarDetailController::class,'withoutdriver']);
Route::get('allcars',[CarDetailController::class,'allcars']);

Route::get('reg-users',[RegisterController::class,'usersdata']);

// Route::post('store-car-detail',[CarDetailController::class,'store']);


route::get('administrator' , [AdminController::class , 'administrator']);

route::get('addcar' , [AdminController::class , 'addcar']);
Route::get('admin_dashboard', [AdminController::class, 'dashboard']);




// Admincar Car Controller

route::get('admincar' , [AdmincarController::class , 'admincar']);
route::get('addcar' , [AdmincarController::class , 'addcar']);
route::post('savecar' , [AdmincarController::class  , 'savecar']);
route::get('editing/{id}' , [AdmincarController::class , 'editcar']);
route::post('uploadvehicle/{id}', [AdmincarController::class , 'uploadcars']);
route::get('delete/{id}' , [AdmincarController::class , 'delete']);

// Admin User Controller
route::get('adminuser' , [AdminuserController::class , 'adminuser']);
route::get('adduser' , [AdminuserController::class , 'adduser']);
route::post('saveuser' , [AdminuserController::class , 'saveuser']);
route::get('editinguser/{id}' , [AdminuserController::class , 'edituser']);
route::post('updateuser/{id}' , [AdminuserController::class , 'updateuser']);
route::get('deleteuser/{id}' , [AdminuserController::class , 'deleteuser']);




//Homes Controller

route::get('availablecars' , [HomesController::class , 'availablecars']);
route::get('viewcardetails/{id}' , [HomesController::class , 'viewcardetails']);
route::get('searchcar', [HomesController::class , 'searchcar']);



//INDEX CONTROLLER PARA SA HOME SA SAKYANAN NGA MA DISPLAY

route::get('/' , [IndexController::class , 'indexcar']);

// Profile Settings Controller

route::get('myprofile/{id}', [ProfileController::class , 'myprofile']);

route::get('editprofile/{id}' , [ProfileController::class , 'editprofile']);
route::post('updateprofile/{id}' , [ProfileController::class , 'updateprofile']);

























