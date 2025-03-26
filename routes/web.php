<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\sumTwoNumbersController;
// use App\Http\Controllers\SignupController;
// use App\Http\Controllers\api\ApiController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/Api', [ApiController::class, 'getData']);
// Route::get('/signup', [SignupController::class, 'index']);
// Route::post('/signup', [SignupController::class, 'signup']);
// Route::get('/sumTwoNumbers', [sumTwoNumbersController::class, 'index']);
// Route::post('/sumTwoNumbers/caculator', [sumTwoNumbersController::class, 'caculator']);
// Route::group(['prefix' => "tutorial"], function () {
//     Route::get("/a", function () {
//         echo "a";
//     });
//     Route::get("/b", function () {
//         echo "b";
//     });
//     Route::get("/c", function () {
//         echo "c";
//     });
//     Route::get("/d", function () {
//         echo "d";
//     });
// });

// use App\Http\Controllers\Api\postController;
 
// Route::resource('/post', postController::class);


//MiniTest place
// use App\Http\Controllers\ProductManagementController;
// Route::group(['prefix' => "miniTest"], function () {
//     Route::get("/form", [ProductManagementController::class, 'index'])->name('form.index');
//     Route::post("/save", [ProductManagementController::class, 'save']);
//     Route::get("/productList", [ProductManagementController::class, 'show']);
// });

//product api
// use App\Http\Controllers\ProductController;
// Route::resource('products', ProductController::class);

//web sale
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;


// Route::get('/index', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/themgiohang', [PageController::class, 'themgiohang'])->name('themgiohang');
Route::get('/loai-san-pham', [PageController::class, 'getLoaiSp'])->name('loatsanpham');
Route::get('/detail/{id}', [PageController::class, 'getDetail']);
Route::get('/type/{id}', [PageController::class, 'getLoaiSp'])->name('typeP');
Route::get('/', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/signup', [PageController::class, 'GetFormSignUp'])->name('GetFormSignUp');
Route::post('/handlesignup', [PageController::class, 'SignUp'])->name('SignUp');
Route::get('/signin', [PageController::class, 'GetFormSignIn'])->name('GetFormSignIn');
Route::post('/handlesignin', [PageController::class, 'SignIn'])->name('SignIn');
Route::get('/logout', [PageController::class, 'LogOut'])->name('LogOut');
Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');												
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');

Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/admin-export', [PageController::class, 'exportAdminProduct'])->name('export');
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [ProductsController::class, 'postAdminAdd']);
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('admin-edit', [ProductsController::class, 'postAdminEdit'])->name('admin-edit');
Route::post('/admin-delete/{id}', [ProductsController::class, 'postAdminDelete']);

///cat web
// use App\Http\Controllers\EshopperController;
// Route::group(['prefix' => "shopper"], function () {
//     Route::get('/shop', [EshopperController::class, 'getIndex'])->name('eshopperShop');
//     Route::get('/shop/products', [EshopperController::class, 'getProducts'])->name('eshopperProducts');
//     Route::get('/shop/details', [EshopperController::class, 'getDetails'])->name('eshopperDetails');
// });