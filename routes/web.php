<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Foro\Index;
use App\Http\Livewire\Foro\Object\Context;



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

Route::get('/', Index::class)->name('index');

Route::get('/index',Context::class)->name('context');
