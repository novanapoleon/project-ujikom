<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;

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

Route::get('/index', function () {
    return view('index');
});
Route::get('/register', [AuthController::class,'register']);
Route::post('/registered',[AuthController::class, 'registered']);

Route::get('/login', function () {
    return view('page.login');
})->name('login');

Route::middleware('auth')->group(function(){
    
    Route::get('/explore',[UserController::class,'explore']);
    Route::get('/getDataExplore', [ExploreController::class, 'getdata']);
    Route::post('/likefotos',[ExploreController::class, 'likesfotos']);
    
    Route::get('/detail/{id}',[UserController::class,'detail']);
    Route::get('/detail/{id}/getdatadetail',[ExploreController::class, 'getdatadetail']);
    Route::get('/detail/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);
    Route::post('/detail/kirimkomentar',[ExploreController::class, 'kirimkomentar']);
    
    Route::get('/upload', [UserController::class, 'upload'] );
    Route::post('/upload/store', [UploadController::class, 'storeFoto']);

    Route::get('/otherpin/{id}', [UserController::class,'otherpin']);
    Route::get('/otherpin/getDataPin/{id}', [pinController::class, 'getdatapin']);
    Route::get('/getdataotherpinexplore/',[pinController::class, 'getdata']);

    Route::get('/mypin',[UserController::class, 'profil']);
    Route::get('/editprofil', [UserController::class,'editprofil']);
    Route::post('/update', [ProfilController::class,'update']);
    Route::get('/changepassword', [ProfilController::class,'changepassword']);
    Route::post('/updatepassword', [ProfilController::class,'change']);

    //album
    Route::get('/album', [ViewController::class, 'album']);
    Route::get('/upload/uploadfoto', [UploadController::class, 'uploadfoto']);
    Route::get('/upload', [ViewController::class, 'upload']);
    Route::get('/buatalbum', [ViewController::class, 'buatalbum']);
   Route::post('/buat-album', [AlbumController::class, 'storeAlbum']);
   Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);

    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::post('/auth',[AuthController::class, 'auth']);

