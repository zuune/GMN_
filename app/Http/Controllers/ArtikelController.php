<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        return view('Dashboard.articles');
    }

    public function create(){
        return view('Dashboard.add-article');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:articles',
            'body' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan artikel
        $article = Artikel::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        // Simpan gambar
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                // Simpan gambar ke penyimpanan (storage)
                $path = $file->storeAs('public/images', $file->getClientOriginalName());

                // Buat record baru di tabel images dan sertakan id_article
                $article->images()->create([
                    'image' => $path,
                    'id_article' => $article->id, // Menyertakan id_article
                ]);
            }
        }


        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }
}
