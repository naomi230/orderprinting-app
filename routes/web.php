<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController; 
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ListViewController;
use App\Http\Controllers\IndividualOrderListController;


use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//routes for superAdmin
/*
Route::prefix('superAdmin')->middleware('auth','isSuperAdmin')->group(function(){
    Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
});
Route::group(['middleware' => ['auth', 'isSuperAdmin']], function () {
    // Routes accessible only to super admin
    Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
});*/

//routes for pages 
Route::middleware('auth')->group(function () {
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'create'])->name('customer');
    Route::get('/viiew',[App\Http\Controllers\CustomerController::class,'createe'])->name('order.view'); //displayes the past order created
    Route::post('/form_submit',[App\Http\Controllers\FormController::class,'store'])->name('form.submit');//stores to the database
    Route::get('/formsubmit',[App\Http\Controllers\CustomerController::class,'submitted'])->name('formsubmit');//after storing the displayed page route
    Route::get('/formsubmit', [App\Http\Controllers\ShowController::class, 'show'])->name('show');
    Route::get('/customerExplore', [App\Http\Controllers\ExploreController::class, 'explore'])->name('customerExplore');
    //Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
});


Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
//Route::get('/superAdmin', 'SuperAdminController@cruder');
Route::get('/customerAdminview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customerAdminview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE


Route::get('/{user}/orderlist',[App\Http\Controllers\IndividualOrderListController::class,'list'])->name('orderlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE

//Route to download image

Route::get('/orders/{orderId}/download', [App\Http\Controllers\ListViewController::class, 'downloadImage'])->name('orders.download');
//Route for displaying admin jobs
Route::get('/adminJobs',[App\Http\Controllers\AdminJobController::class,'jobView'])->name('adminJobs');
//TO SUBMIT NEW UPDATES OF THE USER
                   //READ THIS IMPORTANT !!!!!!!!!!!
//oKAY READ CAAREFULLY I KNOW YOU WILL FORGET
//WE ARE LEAVING THIS ROUTE FOR NOW BECAUSE IT DOES NOT WORK UNLESS I
//THE POST METHOD WHICH IS ONLY POSITIBLE AFTER AUTHENTICATION SO FOR NOW FINISH FIXING THE
//USER PAGE TO DISPLAY THE RELATION AND STATUS IN THE VIEW POINT AFTER THAT 
//WE WILL DEAL WITH REPLASING THE ACTION TO POST FROM GET 
//PAGE AFTER THAT WE WILL DEAL 
Route::get('/adminUpdates',[App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('adminUpdates');  //A BLADE TO ENABLE THE UPDATES TO GO STRAIGHT TO DATABASE
               //READ THIS IMPORTANT !!!!!!!!!!!
require __DIR__.'/auth.php';

