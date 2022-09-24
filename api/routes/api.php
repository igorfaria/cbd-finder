<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrawlerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInfoController;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function(){
    return [
        'text' => "Você é o amor da minha vida <3",
    ];
})->name('index');

Route::resources([
    'user' => UserController::class,
    'store' => StoreController::class,
    'address' => AddressController::class,
    'contact' => ContactController::class,
    'product' => ProductController::class,
    'product-info' => ProductInfoController::class,
    'brand' => BrandController::class,
    'crawler' => CrawlerController::class,
]);