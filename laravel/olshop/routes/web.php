<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ForminputController;

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

Route::get('/salam', function () {
    return "Hallo Kawan";
});

route::get('/nf', function(){
    return view('nf');
});

route::get('/about', function(){
    return view('about',[
        "title" => "about",
        "nama" => "Muhammad Arman",
        "umur" => 20,
        "email" => "Arf4th@gmail.com",
    ]);
});

route::get('/tugas', function(){
    return view('tugas');
});

Route::get('/output', function(){
    return view('output');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']); 

Route::get('/form', [ForminputController::class, 'index']);
Route::post('/form', [ForminputController::class, 'form']);

//ini root tampilan admin backend
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index']); 
    Route::get('/produk', [ProdukController::class, 'index']); 
});


//ini tampilan frantend
Route::prefix('frontend')->group(function (){
Route::get('/dashboard', [DashboardController::class, 'index']); 
Route::get('/about', [ProdukController::class, 'index']); 
});
