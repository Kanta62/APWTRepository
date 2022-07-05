<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
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

Route::get('/login',[CustomerController::class, 'Login'])->name('Login');
Route::post('/login',[CustomerController::class, 'loginSubmitted'])->name('Login');

Route::get('/registration',[CustomerController::class, 'CustReg'])->name('Registration');
Route::post('/registration',[CustomerController::class, 'Create'])->name('Registration');

Route::get('user/dash',[CustomerController::class, 'Dashboard'])->name('Dashboard')->middleware('UserLogged'); 

Route::get('/user/edit',[CustomerController::class, 'editProfile'])->name('EditProfile');
Route::post('/user/edit',[CustomerController::class, 'editProfileSubmitted'])->name('EditProfile');

Route::get('admin/userlist',[AdminController::class, 'UserList'])->name('UserList');

Route::get('/logout',[CustomerController::class, 'logout'])->name('logout');
