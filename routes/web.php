<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\PrivateController;
use App\Http\Middleware\LogInMiddleware;
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

Route::controller(UserController::class)->group(function()
{
    Route::get('logout', 'logOut')->name('logout');
    Route::get('sign-in', 'signInTpl')->name('sign-in');
    Route::post('login', 'signInPost')->name('login-post');
    Route::get('logout', 'logout')->name('logout');
    Route::get('sign-up', 'create')->name('sign-up');
    Route::post('/store', 'signUp')->name('store');
});
Route::controller(PublicController::class)->group(function()
{
    Route::get('/', 'public')->name('public');
    Route::post('addComment', 'createComment')->name('comment');
    Route::get('destroyComm/{id}', 'destroyComment')->name('destroyComm');
    Route::get('nails', 'nails')->name('nails');
    Route::get('eyelashes', 'eyelashes')->name('eyelashes');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('contact', 'contact')->name('contact');
});

Route::controller(PrivateController::class)->middleware(LogInMiddleware::class)->group(function()
{
    // Típus szerkesztés
    Route::get('editService', 'editService')->name('editService');
    Route::put('updateType={type_id}', 'updateType')->name('updateType');

    // Méret és Ár szerkesztése
    Route::get('editNailData/nailID={id}', 'editNail')->name('editNail');
    Route::put('editNailData/updateNail/sizeID={id}', 'updateNail')->name('updateNail/sizeID={id}');

    //Doboz létrehozás
    Route::get('addnewBox', 'addBox')->name('addnewBox');
    Route::post('createnewBox', 'createBox')->name('createnewBox');

    //Doboz törlése
    Route::get('typeDestroy/{id}', 'destroy')->name('typeDestroy');

    //Elem létrehozás
    Route::get('addNewElement', 'addElement')->name('addNewElement');
    Route::post('createNewElement', 'createElement')->name('createNewBox');

    // Kapcsolatok szerkesztés
    Route::get('editContForm', 'editContact')->name('editContForm');
    Route::put('updateContData', 'updateCont')->name('updateContData');
});