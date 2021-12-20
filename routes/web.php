<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('/',[FormController::class,'index']) ;
Route::post('/insert',[FormController::class,'store']);
Route::get('/viewform',[FormController::class,'viewdata']);
Route::get('/edit/{id}',[FormController::class,'edit']);
Route::post('/updatedata/{id}',[FormController::class,'updatedata']);
Route::get('/delete/{id}',[FormController::class,'deleteData']);
Route::post('/login',[FormController::class,'login']) ;
Route::get('/logindisplay',[FormController::class,'logindisplay']) ;
route::get('/logout',[FormController::class,'logout']);
Route::get('/userprofile',[FormController::class,'userprofile']);
Route::post('sessupdatedata',[FormController::class,'sessupdatedata']);
