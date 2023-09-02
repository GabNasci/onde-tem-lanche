<?php

use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Establishment;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $categories = Category::all();
    $events = Event::query()->limit(5)->get();
    $establishments = Establishment::all();

    return view('welcome')->with(compact(['categories', 'events', 'establishments']));
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/busca', [SearchController::class, 'index'])->name('busca');
Route::get('/mapa', [SearchController::class, 'mapa'])->name('mapa');
Route::get('/estabelecimentos/{establishment}', [EstablishmentController::class, 'show'])->name('estabelecimentos.show');


Route::get('/politica-de-privacidade', [DocumentosController::class, 'privacy'])->name('politica-de-privacidade');
Route::get('/termos', [DocumentosController::class, 'terms'])->name('termos');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::put('/user/update', [UserController::class, 'update'])->name('user.update');
});
