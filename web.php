<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/satu', [CollectionController::class,'collectionSatu']);
Route::get('/dua',  [CollectionController::class,'collectionDua']);
Route::get('/tiga', [CollectionController::class,'collectionTiga']);
Route::get('/empat',[CollectionController::class,'collectionEmpat']);
Route::get('/lima', [CollectionController::class,'collectionLima']);
Route::get('/enam', [CollectionController::class,'collectionEnam']);
Route::get('/tujuh', [CollectionController::class,'collectionTujuh']);
