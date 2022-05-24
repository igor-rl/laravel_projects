<?php

// importando controles
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainCotroller;

// paramentros

Route::get('/', [mainCotroller::class,'index']);

Route::get('/produtos', [mainCotroller::class,'produtos']);

Route::get('/contato', [mainCotroller::class,'contato']);

Route::get('/sobrenos', [mainCotroller::class,'sobrenos']);

Route::get('/voce', [mainCotroller::class,'voce']);
