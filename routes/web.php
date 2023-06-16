<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController; 
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperAdminController;


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
    Route::get('/formsubmit',[App\Http\Controllers\CustomerController::class,'submitted'])->name('formsubmit');//after storing the displayed page route
    Route::post('/form_submit',[App\Http\Controllers\FormController::class,'store'])->name('form.submit');//stores to the database
    Route::get('/formsubmit', [App\Http\Controllers\ShowController::class, 'show'])->name('show');
    //Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
});


Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
//Route::get('/superAdmin', 'SuperAdminController@cruder');



require __DIR__.'/auth.php';
