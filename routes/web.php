<?php

use App\Http\Controllers\GuideBookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//User Routes
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[App\Http\Controllers\HomeController::class, 'userHome'])->name("home");
});

//Admin Routes
Route::middleware(['auth','user-role:admin'])->group(function()
{
    
    Route::get("/admin/home",[App\Http\Controllers\HomeController::class, 'adminHome'])->name("admin.home");
    Route::get('guidebooks',[GuideBookController::class,'index'])->name('guidebooks');
    Route::get('guidebooks/create',[GuideBookController::class,'create'])->name('guidebooks.create');
    Route::get('guidebooks/checkin/create',[GuideBookController::class,'createCheckin'])->name('guidebooks.createCheckin');
    Route::get('guidebooks/direction/create',[GuideBookController::class,'createDirection'])->name('guidebooks.createDirection');
    Route::get('guidebooks/parking/create',[GuideBookController::class,'createParking'])->name('guidebooks.createParking');
    Route::get('guidebooks/wifi/create',[GuideBookController::class,'createWifi'])->name('guidebooks.createWifi');
});

Route::get('design',function(){
    return view('guidebook.design');
});