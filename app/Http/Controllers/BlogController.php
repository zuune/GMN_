<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    public function index(){
        $article = Blog::all();

        return view('Dashboard.articles', ["article" => $article]);
    }

    public function create(){
        return view('Dashboard.add-article');
    }

    public function edit($slug){
        $article = Blog::where('slug', $slug)->first();
        // dd($article);

        return view('Dashboard.edit-article', ["article" => $article]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs',
            'body' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Simpan artikel
        $article = Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        // Simpan gambar
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                // Tentukan direktori tujuan untuk menyimpan gambar
                $tujuan_upload = 'public/images';
        
                // Pindahkan gambar ke direktori tujuan dengan nama asli
                $path = $file->move($tujuan_upload, $file->getClientOriginalName());
        
                // Buat record baru di tabel images dan sertakan id_article
                $article->image()->create([
                    'image' => $path,
                    'id_article' => $article->id, // Menyertakan id_article
                ]);
            }
        }


        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/dashboard/articles')->with('success', 'Article created successfully');
    }

    public function show($slug){
        $article = Blog::where('slug', $slug)->first();
        // dd($article);

        return view('Dashboard.detail-article', ["article" => $article]);
    }

    public function update(Request $request, $slug)
{
    $request->validate([
        'title' => 'required',
        'slug' => 'required',
        'body' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $article = Blog::where('slug', $slug)->firstOrFail();
    $article->title = $request->input('title');
    $article->slug = $request->input('slug');
    $article->body = $request->input('body');

    // Handle images
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        foreach ($article->image as $image) {
            // Mengganti karakter '\' dengan '/'
            $path = str_replace('\\', '/', public_path('images/' . $image->image));
        
            if (file_exists($path)) {
                unlink($path);
            }
        
            $image->delete();
        }

        // Simpan gambar baru
        foreach ($request->file('image') as $file) {
                // Tentukan direktori tujuan untuk menyimpan gambar
                $tujuan_upload = 'public/images';
        
                // Pindahkan gambar ke direktori tujuan dengan nama asli
                $path = $file->move($tujuan_upload, $file->getClientOriginalName());
        
                // Buat record baru di tabel images dan sertakan id_article
                $article->image()->create([
                    'image' => $path,
                    'id_article' => $article->id, // Menyertakan id_article
                ]);
        }
    }

    $article->save();

    return redirect('/dashboard/articles')->with('success', 'Article updated successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);  

        $article = Blog::findOrFail($id);
    
        // Hapus artikel dan gambar-gambar yang terkait di sini
        $article->delete();
    
        foreach($article->image as $image){
            $image->delete();
        }
    
        return back()->with('success', 'Article deleted successfully!');
    }

}
