<?php

use App\Http\Controllers\Admin\ContractController;
use App\Http\Controllers\Admin\NewYearController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\Staff\PersenelController;
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
//
//Route::get('/', function () {
//    return view('auth.login');
//});

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout',['App\Http\Controllers\login\LoginController','logout'])->name('logout');
Route::get('/',['App\Http\Controllers\login\LoginController','index'])->name('login')->middleware('guest');
Route::post('/login',['App\Http\Controllers\login\LoginController','store'])->name('login.store')->middleware('guest');


//admin
Route::middleware(['auth'])->prefix('/panel')->group(function (){
    Route::get('/',['App\Http\Controllers\Admin\AdminPanelController','index'])->name('admin.panel');
    Route::resource('/contracts', ContractController::class);
    Route::resource('/newYear', NewYearController::class);
    Route::resource('/users', UserController::class);
    Route::get('/profile/password/index',['App\Http\Controllers\Admin\ProfileController', 'get'])->name('get.password');
    Route::patch('profile/password/create',['App\Http\Controllers\Admin\ProfileController', 'postPassword'])->name('post.password');
    Route::get('/profile/edit',['App\Http\Controllers\Admin\ProfileController', 'editProfile'])->name('edit.profile');
    Route::patch('profile/update',['App\Http\Controllers\Admin\ProfileController', 'updateProfile'])->name('update.profile');
//    Route::get('/regulation/create',['App\Http\Controllers\Admin\RegulationController','create'])->name('regulation.create');
//    Route::post('/regulation/store',['App\Http\Controllers\Admin\RegulationController','store'])->name('regulation.store');
});


//staff

Route::middleware('auth')->prefix('/staff')->group(function (){
    Route::get('/',['App\Http\Controllers\Staff\StaffController','index'])->name('staff.index');
    Route::resource('/persenel', PersenelController::class);
    Route::resource('/rewards', \App\Http\Controllers\Staff\RewardsController::class)->only(['create','store','destroy']);
    Route::get('/help/create',['App\Http\Controllers\Staff\HelpController','create'])->name('help.create');
    Route::post('/help/store',['App\Http\Controllers\Staff\HelpController','store'])->name('help.store');
});
