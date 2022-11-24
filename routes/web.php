<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\cartController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



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
Route::get('/',  [App\Http\Controllers\Frontend\frontendController::class, 'index']);
Route::get('/Category',  [App\Http\Controllers\Frontend\frontendController::class, 'Category']);
Route::get('view-category/{slug}',  [App\Http\Controllers\Frontend\frontendController::class, 'viewCategory']);
Route::get('category/{cate_slug}/{prod_name}',  [App\Http\Controllers\Frontend\frontendController::class, 'productview']);
Auth::routes();
Route::middleware(['auth'])->group(function (){
    route::post('/add-to-cart',[cartController::class,'addproduct']);
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',  [FrontendController::class, 'index']);
    Route::get('/Categories',  [CategoryController::class, 'index']);
    Route::get('/add_Categories',  [CategoryController::class, 'add']);
    Route::post('/insert_category',  [CategoryController::class, 'insert_category']);
    Route::get('/edit_Category/{id}',[CategoryController::class, 'edit']);
    Route::put('/update_category/{id}',[CategoryController::class, 'update']);
    Route::get('/delete_Category/{id}',  [CategoryController::class, 'destroy']);
    Route::get('/Products',  [ProductController::class, 'index']);
    Route::get('/add_Products',  [ProductController::class, 'add']);
    Route::post('/insert_products',  [ProductController::class, 'insert_products']);
    Route::get('/edit_products/{id}',[ProductController::class, 'edit']);
    Route::put('/update_products/{id}',[ProductController::class, 'update']);
    Route::get('/delete_products/{id}',  [ProductController::class, 'destroy']);
});
