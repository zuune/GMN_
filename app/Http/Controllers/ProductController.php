<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('Dashboard.products', ["product" => $product]);
    }

    public function create(){
        return view('Dashboard.add-product');
    }

    public function edit($id){

        $id = Crypt::decrypt($id);        
        $product = Product::find($id);
        // dd($product);

        return view('Dashboard.edit-product', ["product" => $product]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_name' => 'required',
            'body' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Simpan artikel
        $product = Product::create([
            'product_name' => $request->product_name,
            'body' => $request->body,
        ]);

        // Simpan gambar
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                // Tentukan direktori tujuan untuk menyimpan gambar
                $tujuan_upload = 'public/images';
        
                // Pindahkan gambar ke direktori tujuan dengan nama asli
                $path = $file->move($tujuan_upload, $file->getClientOriginalName());    
        
                // Buat record baru di tabel images dan sertakan id_project
                $product->image()->create([
                    'image' => $path,
                    'id_product' => $product->id, // Menyertakan id_article
                ]);
            }
        }


        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/dashboard/products')->with('success', 'Product created successfully');
    }

    public function show($id){
        $id = Crypt::decrypt($id);
        $product = Product::find($id);
        // dd($product);

        return view('Dashboard.detail-product', ["product" => $product]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'product_name' => 'required',
        'body' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
    ]);

    $product = Product::find($id);

    $product->product_name = $request->input('product_name');
    $product->body = $request->input('body');

    // Handle images
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        foreach ($product->image as $image) {
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
        
                // Buat record baru di tabel images dan sertakan id_product
                $product->image()->create([
                    'image' => $path,
                    'id_product' => $product->id, // Menyertakan id_product
                ]);
        }
    }

    $product->save();

    return redirect('/dashboard/products')->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);  

        $product= Product::findOrFail($id);
    
        // Hapus artikel dan gambar-gambar yang terkait di sini
        $product->delete();
    
        foreach($product->image as $image){
            $image->delete();
        }
    
        return back()->with('success', 'Product deleted successfully!');
    }
}
