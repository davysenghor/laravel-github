<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeContoller;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\alert;

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


Route::get('/', [HomeContoller::class, 'index'])->name('index');
Route::get('/alerts', [HomeContoller::class, 'alerts'])->name('alerts');
Route::get('/buttons', [HomeContoller::class, 'buttons'])->name('buttons');
Route::get('/dropdowns', [HomeContoller::class, 'dropdowns'])->name('dropdowns');
Route::get('/modals', [HomeContoller::class, 'modals'])->name('modals');
Route::get('/popovers', [HomeContoller::class, 'popovers'])->name('popovers');
Route::get('/progress-bar', [HomeContoller::class, 'progressbar'])->name('progressbar');
Route::get('/form-basics', [HomeContoller::class, 'formbasics'])->name('formbasics');
Route::get('/form-advanceds', [HomeContoller::class, 'formadvanceds'])->name('formadvanceds');
Route::get('/simple-tables', [HomeContoller::class, 'simpletables'])->name('simpletables');
Route::get('/datatables', [HomeContoller::class, 'datatables'])->name('datatables');
Route::get('/login', [HomeContoller::class, 'login'])->name('login');
Route::get('/register', [HomeContoller::class, 'register'])->name('register');
Route::get('/page404', [HomeContoller::class, 'page404'])->name('page404');
Route::get('/blank', [HomeContoller::class, 'blank'])->name('blank');
Route::get('/charts', [HomeContoller::class, 'charts'])->name('charts');
Route::get('/ui-colors', [HomeContoller::class, 'uicolors'])->name('uicolors');

