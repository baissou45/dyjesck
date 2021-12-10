<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\PostController;
use App\Http\CommentControlle;
use App\Http\Controllers\CategorieController;
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
Route::get('qui-somme-nous', [RouteController::class, 'qui'])->name('qui');
Route::get('domaines', [RouteController::class, 'domaines'])->name('domaines');
Route::get('equipe', [RouteController::class, 'equipe'])->name('equipe');
Route::get('pouquoiNous', [RouteController::class, 'pouquoiNous'])->name('pouquoiNous');

Route::get('post/{slug}', [PostController::class, 'categorie'])->name('post.categorie');
Route::get('post', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');

Route::get('categorie', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('categorie', [CategorieController::class, 'store'])->name('categorie.store');

Route::post('comentaire', [CommentController::class, 'store'])->name('comment.add');