<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile/{name}', function($name){
    return view('profile/'.strtolower($name), ["name"=>strtolower($name)]);
}
);

use App\Http\Controllers\usercontroll;
Route::get('/cavis/{id}', [usercontroll::class, 'name']);