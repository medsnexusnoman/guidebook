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
    Route::get('guidebook/{id}',[GuideBookController::class,'show'])->name('guidebook.show');

    Route::post('guidebooks/store',[GuideBookController::class,'storeAddress'])->name('guidebooks.storeAddress');
    
    Route::get('guidebooks/create',[GuideBookController::class,'create'])->name('guidebooks.create');
    Route::post('guidebooks/checkins/store',[GuideBookController::class,'storeCheckins'])->name('guidebooks.storeCheckins');
    Route::get('guidebooks/checkin/{id}/create',[GuideBookController::class,'createCheckin'])->name('guidebooks.createCheckin');

    Route::get('guidebooks/direction/{id}/create',[GuideBookController::class,'createDirection'])->name('guidebooks.createDirection');
    Route::post('guidebooks/direction/store',[GuideBookController::class,'storeDirection'])->name('guidebooks.storeDirection');
    
    Route::get('guidebooks/parking/create',[GuideBookController::class,'createParking'])->name('guidebooks.createParking');
    Route::get('guidebooks/wifi/create',[GuideBookController::class,'createWifi'])->name('guidebooks.createWifi');
   
});

Route::get('design',function(){
    return view('guidebook.design');
});