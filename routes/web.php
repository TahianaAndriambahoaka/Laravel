<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
    // return view('welcome');
    return redirect('/hello');
});

// Route::get('/hello.{param}', function ($param) {
//     return view('hello', ['name' => $param]);
// });

Route::view('/hello', 'hello');

Route::get('users/{user}', [Users::class, 'index']);

Route::view('/login', 'form');

Route::post('/traitementForm', [Users::class, 'check']);
