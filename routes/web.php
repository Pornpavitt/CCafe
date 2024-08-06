<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ReservetableController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\billController;
use App\Http\Controllers\managementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\paymentController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Route::get('redirects', [HomeController::class, 'index']);



Route::middleware([
    'admin'
])->group(function () {
    /*||||||||||||||||||
    | Manage Controller|
    ||||||||||||||||||||*/

    //เพิ่มสินค้า
    Route::get('/management', [managementController::class, 'insertz'])->name("management");
    Route::get('/management/{depID}', [managementController::class, 'insertz'])->name("management");
    Route::post('/management/add', [managementController::class, "addproducts"]);
    Route::get('/reservetable', [ReservetableController::class, 'index']);


    //ลบสินค้า
    Route::get('/management/delete/{id}', [managementController::class, "deleteproduct"]);

    //แก้ไขสินค้า
    Route::get('/edit/{id}', [managementController::class, "editpro"]);
    Route::post('/management/edit/', [managementController::class, "editname"]);
    Route::get('/insert', [managementController::class, "insertz"]);
    
    //payment history
    Route::get('/history', [billController::class, "history"])->name('history');
});




/*|||||||||||||||||||
| Product Controller|
|||||||||||||||||||||*/

//สั่ง
Route::get('/product/{tid}/{id}', [ProductController::class, "productpage"])->name('productpage');


// ลบรายการอาหาร
Route::get('/delete/{bid}/{uid}/{tid}', [ProductController::class, "deleteitem"]);




/*||||||||||||||||
| Bill Controller|
||||||||||||||||||*/

Route::get('/deleteorder/{bid}/{pid}/{tid}/{did}', [billController::class, "delete"]);

// บันทึกข้อมูลลงบิลดีเทล
Route::get('/add/product/{tid}/{id}', [billController::class, "add_product"]);
Route::get('/add/product/', [billController::class, "add_product"]);

// Bill deatail
Route::get('/bill/detail/{tid}/{bid}', [billController::class, "billDetail"])->name('billDetail');



/*|||||||||||||||||||
| payment Controller|
|||||||||||||||||||||*/

// payment
Route::get('/payment', [paymentController::class, "paymentForm"])->name('paymentForm');
Route::post('/payment', [paymentController::class, "payment"])->name('payment');





/*||||||||||||||||||||||||
| Reservetable Controller|
||||||||||||||||||||||||||*/

//เพิ่มโต๊ะ
Route::get('/reservetable', [ReservetableController::class, 'index']);
Route::post('/reservetable/create', [ReservetableController::class, "addtable"]);


/*||||||||||||||||||||||||
| Img Controller|
||||||||||||||||||||||||||*/
//add รูป 
// Route::get('/reservetable', [ProductController::class, 'img']);
