<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Project;

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
    $projects = Project::all();
    $articles = Blog::all();
    $products = Product::all();
    return view('Home.index', ["products" => $products, "articles" => $articles, "projects" => $projects]);
});


Route::get('/about-us/introduction', function () {
    return view('Home.introduction');
});


Route::get('/about-us/founder', function () {
    return view('Home.founder');
});


Route::get('/about-us/organization', function () {
    return view('Home.organization');
});

// Products

Route::get('/products', function () {
    $products = Product::all();

    return view('Home.products', ["products" => $products]);
});
Route::get('/products/detail/{id}', [HomeController::class, 'detailProduct']);


// Services
Route::get('/services', function () {
    return view('Home.services');
});
Route::get('/services/detail-1', function () {
    return view('Home.detail-service');
});
Route::get('/services/detail-2', function () {
    return view('Home.detail-service2');
});

Route::get('/services/detail-3', function () {
    return view('Home.detail-service3');
});

Route::get('/services/detail-4', function () {
    return view('Home.detail-service4');
});

// Projects
Route::get('/projects', function () {
    $projects = Project::all();
    return view('Home.projects', ["projects" => $projects]);
});
Route::get('/projects/detail/{id}', [HomeController::class, 'detailProject']);

// Articles
Route::get('/articles', function () {
    $articles = Blog::all();
    return view('Home.articles', ["articles" => $articles]);
});
Route::get('/articles/detail/{id}', [HomeController::class, 'detailArticle']);


// routes/web.php
Route::get('/projects/getProjectsByYear/{year}', [ProjectController::class, "getProjectsByYear"]);



// Login
Route::get('/admin/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Products
Route::get('/dashboard/products', [ProductController::class, 'index'])->middleware('auth');
Route::get('/dashboard/products/add', [ProductController::class, 'create'])->middleware('auth');
Route::get('/dashboard/products/detail/{id}', [ProductController::class, 'show'])->middleware('auth');
Route::post('/dashboard/products/add', [ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/dashboard/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('/dashboard/products/edit/{id}', [ProductController::class, 'update'])->name('products.edit')->middleware('auth');
Route::get('/dashboard/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete')->middleware('auth');


// services
Route::get('/dashboard/services', [ServiceController::class, 'index'])->middleware('auth');
Route::get('/dashboard/services/add', [ServiceController::class, 'create'])->middleware('auth');


// projects
Route::get('/dashboard/projects', [ProjectController::class, 'index'])->middleware('auth');
Route::get('/dashboard/projects/add', [ProjectController::class, 'create'])->middleware('auth');
Route::get('/dashboard/projects/detail/{id}', [ProjectController::class, 'show'])->middleware('auth');
Route::post('/dashboard/projects/add', [ProjectController::class, 'store'])->name('projects.store')->middleware('auth');
Route::get('/dashboard/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit')->middleware('auth');
Route::post('/dashboard/projects/edit/{id}', [ProjectController::class, 'update'])->name('projects.edit')->middleware('auth');
Route::get('/dashboard/projects/delete/{id}', [ProjectController::class, 'delete'])->name('projects.delete')->middleware('auth');

// articles
Route::get('/dashboard/articles', [BlogController::class, 'index'])->middleware('auth');
Route::get('/dashboard/articles/add', [BlogController::class, 'create'])->middleware('auth');
Route::get('/dashboard/articles/detail/{slug}', [BlogController::class, 'show'])->middleware('auth');
Route::post('/dashboard/articles/add', [BlogController::class, 'store'])->name('articles.store')->middleware('auth');
Route::get('/dashboard/articles/edit/{slug}', [BlogController::class, 'edit'])->name('articles.edit')->middleware('auth');
Route::post('/dashboard/articles/edit/{slug}', [BlogController::class, 'update'])->name('articles.edit')->middleware('auth');
Route::get('/dashboard/articles/delete/{id}', [BlogController::class, 'delete'])->name('articles.delete')->middleware('auth');


