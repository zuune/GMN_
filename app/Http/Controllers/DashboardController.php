<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Overview
    public function index(){
        $projects = Project::all();
        $articles = Blog::all();
        $products = Product::all();
        return view('Dashboard.index', ["products" => $products, "articles" => $articles, "projects" => $projects]);
    }
}
