<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\PermissionController;
use App\Http\Controllers\Backoffice\RoleController;
use App\Http\Controllers\Backoffice\UserController;
use App\Http\Controllers\Backoffice\CategoryController;
use App\Http\Controllers\Backoffice\TypeController;
use App\Http\Controllers\Backoffice\WarehouseController;
use App\Http\Controllers\Backoffice\ProductController;
use App\Http\Controllers\Backoffice\ProductStockController;
use App\Http\Controllers\Backoffice\WarehouseCapacityController;

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

Route::group(['prefix' => 'backoffice', 'as' => 'backoffice.', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('/permission', PermissionController::class);
    Route::resource('/role', RoleController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/type', TypeController::class);
    Route::post('/warehouse/create/cities', [WarehouseController::class, 'cities'])->name('warehouse.create.cities');
    Route::post('/warehouse/create/districts', [WarehouseController::class, 'districts'])->name('warehouse.create.districts');
    Route::post('/warehouse/create/villages', [WarehouseController::class, 'villages'])->name('warehouse.create.villages');
    Route::resource('/warehouse', WarehouseController::class);
    Route::resource('/product', ProductController::class);
    Route::controller(ProductStockController::class)->prefix('/product-stock')->as('product-stock.')->group(function(){
        Route::get('/index', 'index')->name('index');
        Route::put('/update/{id}', 'update')->name('update');
    });
    Route::controller(WarehouseCapacityController::class)->prefix('/warehouse-capacity')->as('warehouse-capacity.')->group(function(){
        Route::get('/index', 'index')->name('index');
        Route::put('/update/{id}', 'update')->name('update');
    });
});
