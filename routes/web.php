<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\PostController;
use App\Http\CommentControlle;
use App\Http\Controllers\CommentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('accueil', [RouteController::class, 'accueuil'])->name('accueil');
Route::get('contact', [RouteController::class, 'contact'])->name('contact');
Route::get('realisations', [RouteController::class, 'realisations'])->name('realisations');
Route::get('realisations/{slug}', [RouteController::class, 'realisation'])->name('realisations.show');
Route::get('apropos', [RouteController::class, 'apropos'])->name('apropos');

Route::get('post', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/article/{post:slug}',  [PostController::class, 'show'])->name('post.show');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/reponse/store',  [CommentController::class, 'reponseStore'])->name('reponse.add');
