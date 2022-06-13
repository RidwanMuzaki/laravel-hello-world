<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

//Routing Practicum 1
/* Route::get('/', function () {
    echo 'Hi! Welcome To Laravel';
});

Route::view('/welcome', 'welcome');

Route::get('/articles/{id}', function($id) {
    echo "This is Article Pages with ID: ".$id;
});*/

//Routing Practicum 2
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//Practicum 3
/* Route::redirect('/', 'https://www.educastudio.com');

Route::prefix('category')->group(function () {

    Route::redirect('/marble-edu-games', 'https://www.educastudio.com/category/marbel-edu-games');

    Route::redirect('/marble-and-friends-kids-games', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');

    Route::redirect('/riri-story-books', 'https://www.educastudio.com/category/riri-story-books');

    Route::redirect('/kolak-kids-songs', 'https://www.educastudio.com/category/kolak-kids-songs');
});

Route::redirect('/news', 'https://www.educastudio.com/news');

Route::prefix('program')->group(function () {

    Route::redirect('/karir', 'https://www.educastudio.com/program/karir');

    Route::redirect('/magang', 'https://www.educastudio.com/program/magang');

    Route::redirect('/kunjungan-industri', 'https://www.educastudio.com/program/kunjungan-industri');
});

Route::redirect('/about-us', 'https://www.educastudio.com/about-us'); */

Route::view('/layout', 'layouts.master');