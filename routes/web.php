<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

use App\Http\Controllers\AbstractFactoryController;

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

Route::prefix('abstract-factory')->group(function () {
    Route::prefix('real')->group(function () {
        Route::get('/test', [AbstractFactoryController::class, 'realTest']);
    });
    Route::prefix('conceitual')->group(function () {
        Route::get('/test', [AbstractFactoryController::class, 'conceitualTest']);
    });    
});