<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;



 
Route::get('/categories',  [CategorieController::class, 'index']);
Route::get('/categories/ajouter', [CategorieController::class,'create']);
Route::post('/categorie/ajouterCategorie', [CategorieController::class,'store']);

Route::get('/articles',  [ArticleController::class, 'index']);
Route::get('/articles/ajouter', [ArticleController::class,'create']);
Route::post('/articles/ajouterArticle', [ArticleController::class,'store']);
