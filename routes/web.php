<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharaController;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'Home',
    ]);
});

Route::get('/muse', [CharaController::class, 'indexMuse']);
Route::get('/muse/{chara:slug}', [CharaController::class, 'charaMuse']);
Route::get('/aqours', [CharaController::class, 'indexAqours']);
Route::get('/aqours/{chara:slug}', [CharaController::class, 'charaAqours']);
Route::get('/nijigasaki', [CharaController::class, 'indexNiji']);
Route::get('/nijigasaki/{chara:slug}', [CharaController::class, 'charaNiji']);
