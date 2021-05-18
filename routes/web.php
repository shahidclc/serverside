<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Parcels;

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
// on receiving request for parcels route fires index function
Route::get("parcels",[Parcels::class,'index'])->middleware('auth');
Route::get("parcels/create",[Parcels::class,'create']);
Route::post("parcels",[Parcels::class,'store']);
Route::get("parcels/{id}",[Parcels::class,'show'])->middleware('auth');;
Route::delete("parcels/{id}",[Parcels::class,'destroy'])->middleware('auth');;



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
