<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sumTwoNumbersController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\api\ApiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Api', [ApiController::class, 'getData']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'signup']);
Route::get('/sumTwoNumbers', [sumTwoNumbersController::class, 'index']);
Route::post('/sumTwoNumbers/caculator', [sumTwoNumbersController::class, 'caculator']);
Route::group(['prefix' => "tutorial"], function () {
    Route::get("/a", function () {
        echo "a";
    });
    Route::get("/b", function () {
        echo "b";
    });
    Route::get("/c", function () {
        echo "c";
    });
    Route::get("/d", function () {
        echo "d";
    });
});

use App\Http\Controllers\Api\postController;
 
Route::resource('/post', postController::class);


//MiniTest place
use App\Http\Controllers\ProductManagementController;
Route::group(['prefix' => "miniTest"], function () {
    Route::get("/form", [ProductManagementController::class, 'index'])->name('form.index');
    Route::post("/save", [ProductManagementController::class, 'save']);
    Route::get("/productList", [ProductManagementController::class, 'show']);
});

//product api
use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);