<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/view-orders', [OrderController::class,'viewOrders']);
Route::post('/add-order', [OrderController::class,'store']);
Route::get('/get-images/{id}', [OrderController::class,'images'])->name('order.images');
