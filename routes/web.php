<?php

use Illuminate\Support\Facades\Route;

// Route the Foro
use App\Http\Livewire\Foro\Index;
use App\Http\Livewire\Foro\Object\Context AS Category;
use App\Http\Livewire\Foro\Object\Category\Ti;
use App\Http\Livewire\Foro\Object\Category\Research;
use App\Http\Livewire\Foro\Object\Task\Discover;

// Route the Admin
use App\Http\Livewire\Foro\Admin\Report\Ban;
use App\Http\Livewire\Foro\Admin\Request\Only;


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

Route::get('/category', Category::class)->name('category');

Route::get('/category/Ti', Ti::class)->name('ti');

Route::get('/category/Ti/Research', Research::class)->name('research');

Route::get('/discover', Discover::class)->name('discover');

Route::get('/Admin/report', Ban::class)->name('ban');

Route::get('/Admin/request', Only::class)->name('only');
