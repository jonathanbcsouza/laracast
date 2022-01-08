<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;

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

// The links below helped to address the issue below and some intelephense errors:
// "Target class [UsersController] does not exist." 
// https://stackoverflow.com/questions/63979629/target-class-usercontroller-does-not-exist
// https://stackoverflow.com/questions/59149877/visual-studio-code-php-intelephense-keep-showing-not-necessary-error

// This code does not work:
// Route::get('users', 'UsersController@index');
// Route::post('users', 'UsersController@store');

//Solution:
Route::get('/users', [UsersController::class, 'index']);
Route::post('/users', [UsersController::class, 'store']);
