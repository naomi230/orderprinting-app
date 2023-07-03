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



//Route::get('/dashboard', function () {
 //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

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

//routes for normal user login pages 
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\CustomerController::class,'submitted'])->name('dashboard');//after storing the displayed page route
    Route::get('/dashboard', [App\Http\Controllers\ShowController::class, 'show'])->name('show');
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'create'])->name('customer');
    Route::get('/viiew',[App\Http\Controllers\CustomerController::class,'createe'])->name('order.view'); //displayes the past order created
    Route::post('/form_submit',[App\Http\Controllers\FormController::class,'store'])->name('form.submit');//stores to the database
    Route::get('/customerExplore', [App\Http\Controllers\ExploreController::class, 'explore'])->name('customerExplore');
    Route::get('/orderUpdates/{id}',[App\Http\Controllers\OrderUpdatesController::class,'edit'])->name('orderUpdates');
    Route::get('/invoices/{invoiceId}/invoice', [App\Http\Controllers\InvoiceController::class, 'showInvoice'])->name('invoices.show');

    //Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
});

/*/ROUTES FOR TECHNICIAN
Route::get('/subAdmin',[App\Http\Controllers\SubAdminController::class,'cruder'])->name('subAdmin');
Route::get('/customersubview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customersubview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
Route::get('/{user}/orderrlist',[App\Http\Controllers\SupIndividualListController::class,'list'])->name('orderrlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
Route::get('/orderrs/{orderId}/dowwnload', [App\Http\Controllers\ListViewController::class, 'dowwnloadImage'])->name('orders.dowwnload');
Route::get('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'jobView'])->name('subadminJobs');
Route::post('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'store'])->name('store.subadminJobs');
Route::get('/subadminUpdates',[App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('subadminUpdates');  //A BLADE TO ENABLE THE UPDATES TO GO STRAIGHT TO DATABASE


//ROUTES FOR SUPERADMIN
Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
Route::get('/customerAdminview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customerAdminview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
Route::get('/{user}/orderlist',[App\Http\Controllers\IndividualOrderListController::class,'list'])->name('orderlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
Route::get('/orders/{orderId}/download', [App\Http\Controllers\ListViewController::class, 'downloadImage'])->name('orders.download');//Route to download image
Route::get('/adminJobs',[App\Http\Controllers\AdminJobController::class,'jobView'])->name('adminJobs');//Route for displaying admin jobs and uploading images of previous jobs
Route::post('/adminJobs',[App\Http\Controllers\AdminJobController::class,'store'])->name('store.adminJobs');
Route::get('/adminUpdates',[App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('adminUpdates');  //A BLADE TO ENABLE THE UPDATES TO GO STRAIGHT TO DATABASE
//TO SUBMIT NEW UPDATES OF THE USER
                   //READ THIS IMPORTANT !!!!!!!!!!!
//oKAY READ CAAREFULLY I KNOW YOU WILL FORGET
//WE ARE LEAVING THIS ROUTE FOR NOW BECAUSE IT DOES NOT WORK UNLESS I
//THE POST METHOD WHICH IS ONLY POSITIBLE AFTER AUTHENTICATION SO FOR NOW FINISH FIXING THE
//USER PAGE TO DISPLAY THE RELATION AND STATUS IN THE VIEW POINT AFTER THAT 
//WE WILL DEAL WITH REPLASING THE ACTION TO POST FROM GET 
//PAGE AFTER THAT WE WILL DEAL 
//WE ARE TALKING ABOUT THE ROUTE
               //READ THIS IMPORTANT !!!!!!!!!!!

// Users Routes

/*Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\CustomerController::class,'submitted'])->name('dashboard');//after storing the displayed page route
    Route::get('/dashboard', [App\Http\Controllers\ShowController::class, 'show'])->name('show');
    Route::get('/customer',[App\Http\Controllers\CustomerController::class,'create'])->name('customer');
    Route::post('/form_submit',[App\Http\Controllers\FormController::class,'store'])->name('form.submit');//stores to the database
    Route::get('/viiew',[App\Http\Controllers\CustomerController::class,'createe'])->name('order.view'); //displayes the past order created
    Route::get('/customerExplore', [App\Http\Controllers\ExploreController::class, 'explore'])->name('customerExplore');
    Route::get('/orderUpdates/{orderId}',[App\Http\Controllers\OrderUpdatesController::class,'updates'])->name('orderUpdates');
    Route::get('/invoices/{invoiceId}/invoice', [App\Http\Controllers\InvoiceController::class, 'showInvoice'])->name('invoices.show');
});*/

// Manager Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/subAdmin',[App\Http\Controllers\SubAdminController::class,'cruder'])->name('subAdmin');
    Route::get('/customersubview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customersubview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
    Route::get('/{user}/orderrlist',[App\Http\Controllers\SupIndividualListController::class,'list'])->name('orderrlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
    Route::get('/orderrs/{orderId}/dowwnload', [App\Http\Controllers\ListViewController::class, 'dowwnloadImage'])->name('orders.dowwnload');
    Route::get('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'jobView'])->name('subadminJobs');
    Route::post('/subadminJobs',[App\Http\Controllers\SupAdminJobController::class,'store'])->name('store.subadminJobs');
      //A BLADE TO ENABLE THE UPDATES TO GO STRAIGHT TO DATABASE
    Route::get('/orders/{id}/edit',[App\Http\Controllers\AdminUpdatesController::class,'edit'])->name('orders.edit');
    Route::put('/orders/{id}',  [App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('subadminUpdates');
});
// Super Admin Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/superAdmin',[App\Http\Controllers\SuperAdminController::class,'cruder'])->name('superAdmin');
    Route::get('/customerAdminview',[App\Http\Controllers\ListViewController::class,'viewedlist'])->name('customerAdminview');//TO VIEW A LIST OF CUSTOMERS WHO HAVE MADE ORDERS IN THE ADMIN PAGE
    Route::get('/{user}/orderlist',[App\Http\Controllers\IndividualOrderListController::class,'list'])->name('orderlist');//TO VIE A WHOLE LIST OF ORDRS MADE BY CUSTOMERS IN THE ADMIN PAGE
    Route::get('/orders/{orderId}/download', [App\Http\Controllers\ListViewController::class, 'downloadImage'])->name('orders.download');//Route to download image
    Route::get('/adminJobs',[App\Http\Controllers\AdminJobController::class,'jobView'])->name('adminJobs');//Route for displaying admin jobs and uploading images of previous jobs
    Route::post('/adminJobs',[App\Http\Controllers\AdminJobController::class,'store'])->name('store.adminJobs');
    Route::get('/make-admin/{id}',[App\Http\Controllers\AdminMakerController::class,'makeAdmin'])->name('makeAdmin'); //CODES TO MAKE A CUSTOMER AN ADMIN
    Route::delete('/users/{id}', [App\Http\Controllers\UserDeleteController::class,'destroy'])->name('users.destroy');
   //A BLADE TO ENABLE THE UPDATES TO GO STRAIGHT TO DATABASE
   Route::post('/adminUpdates/{id}',[App\Http\Controllers\AdminUpdatesController::class,'store'])->name('adminUpdates.store');

   Route::get('/customerAdminview/{id}/edit',[App\Http\Controllers\AdminUpdatesController::class,'edit'])->name('customerAdminview.edit');
   // Route::put('/orders/{id}', [App\Http\Controllers\AdminUpdatesController::class,'updatesdb'])->name('adminUpdates');
});











require __DIR__.'/auth.php';

