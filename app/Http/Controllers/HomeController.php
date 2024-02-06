<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function detailProject($id){
        $id = Crypt::decrypt($id);

        $project = Project::find($id);

        return view('Home.detail-project', ["project" => $project]);
    }

    public function detailProduct($id){
        $id = Crypt::decrypt($id);

        $product = Product::find($id);

        return view('Home.detail-product', ["product" => $product]);
    }

    public function detailArticle($id){
        $id = Crypt::decrypt($id);

        $article = Blog::find($id);

        return view('Home.detail-article', ["article" => $article]);
    }
}
