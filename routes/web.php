<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController; 
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ListViewController;
use App\Http\Controllers\IndividualOrderListController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\OrderUpdatesController;



use Illuminate\Support\Facades\Route;



/*
THIS IS THE ROUTE FILE
*/



Route::get('/', function () {
    return view('welcome');
   
});



Route::get('/dashboard', function () {
    return redirect('/dashboard');

})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// CUSTOMER ROUTES

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\CustomerController::class,'submitted'])->name('dashboard');//after storing the displayed page route
    Route::get('/dashboard', [App\Http\Controllers\ShowController::class, 'show'])->name('show');
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'create'])->name('customer');
    Route::post('/form_submit',[App\Http\Controllers\FormController::class,'store'])->name('form.submit');//stores to the database
    Route::get('/viiew',[App\Http\Controllers\CustomerController::class,'createe'])->name('order.view'); //displayes the past order created
    Route::get('/customerExplore', [App\Http\Controllers\ExploreController::class, 'explore'])->name('customerExplore');
    Route::get('/orderUpdates/{orderId}',[App\Http\Controllers\OrderUpdatesController::class,'updates'])->name('orderUpdates');
    Route::get('/invoice/{id}', [App\Http\Controllers\InvoiceController::class, 'generateInvoice'])->name('invoice');
});

// INDUSTRIAL TECHNICIAN ROUTES

Route::middleware(['auth'])->group(function () {
    Route::get('/subAdmin',[App\Http\Controllers\SubAdminController::class,'cruder'])->name('subAdmin');
    Route::get('/customersubview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customersubview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
    Route::get('/{user}/orderrlist',[App\Http\Controllers\SupIndividualListController::class,'list'])->name('orderrlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
    Route::get('/orderrs/{orderId}/dowwnload', [App\Http\Controllers\ListViewController::class, 'dowwnloadImage'])->name('orders.dowwnload');
    Route::get('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'jobView'])->name('subadminJobs');
    Route::post('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'store'])->name('store.subadminJobs');
    Route::get('/orders/{id}/edit',[App\Http\Controllers\AdminUpdatesController::class,'edit'])->name('orders.edit');
    Route::put('/orders/{id}',  [App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('subadminUpdates');
});


// INDUSTRIAL MANAGER ROUTES

Route::middleware(['auth'])->group(function () {
    Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
    Route::get('/customerAdminview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customerAdminview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
    Route::get('/{user}/orderlist',[App\Http\Controllers\IndividualOrderListController::class,'list'])->name('orderlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
    Route::get('/orders/{orderId}/download', [App\Http\Controllers\ListViewController::class, 'downloadImage'])->name('orders.download');//Route to download image
    Route::get('/adminJobs',[App\Http\Controllers\AdminJobController::class,'jobView'])->name('adminJobs');//Route for displaying admin jobs and uploading images of previous jobs
    Route::post('/adminJobs',[App\Http\Controllers\AdminJobController::class,'store'])->name('store.adminJobs');
    Route::get('/make-admin/{id}',[App\Http\Controllers\AdminMakerController::class,'makeAdmin'])->name('makeAdmin'); //CODES TO MAKE A CUSTOMER AN ADMIN
    Route::delete('/users/{id}', [App\Http\Controllers\UserDeleteController::class,'destroy'])->name('users.destroy');
   Route::post('/adminUpdates/{id}',[App\Http\Controllers\AdminUpdatesController::class,'store'])->name('adminUpdates.store');
   Route::get('/customerAdminview/{id}/edit',[App\Http\Controllers\AdminUpdatesController::class,'edit'])->name('customerAdminview.edit');
   
});


require __DIR__.'/auth.php';

