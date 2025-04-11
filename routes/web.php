<?php

use App\Http\Controllers\DetailItemController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HelpcenterController;
use App\Http\Controllers\HomePage;
use App\Http\Controllers\HomePage3;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('homepage1',[HomePage::class,'index']);
route::get('explore',[ExploreController::class,'explore']);
route::get('DetailsItem',[DetailItemController::class,'DetailItem']);
route::get('LiveStream',[LiveController::class,'Livestream']);
route::get('helpCenter',[HelpcenterController::class,'helpcenter']);
route::get('login',[LoginController::class,'Log']);
// route::get('homepage3',[HomePage3::class,'index3']);