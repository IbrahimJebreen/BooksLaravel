<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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


Route::get('books',[BookController::class,'index']);
Route::get('addBook',[BookController::class,'AddBook']);
Route::post('store',[BookController::class,'store']);

Route::get('delete/{id}',[BookController::class,'delete']);
Route::get('edit/{id}',[BookController::class,'showData']);
Route::put('update',[BookController::class,'update']);












// Route::namespace('Front')->group(function(){
// Route::get('users',[UserController::class,'userName']);
// });