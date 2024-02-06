<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();

        return view('Dashboard.projects', ["project" => $project]);
    }

    public function create(){
        return view('Dashboard.add-project');
    }

    public function edit($id){

        $id = Crypt::decrypt($id);        
        $project = Project::find($id);
        // dd($project);

        return view('Dashboard.edit-project', ["project" => $project]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'project_name' => 'required',
            'client' => 'required',
            'date' => 'required',
            'location' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'body' => 'required',
        ]);

        // Simpan artikel
        $project = Project::create([
            'project_name' => $request->project_name,
            'client' => $request->client,
            'date' => $request->date,
            'location' => $request->location,
            'body' => $request->body,
        ]);

        // Simpan gambar
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                // Tentukan direktori tujuan untuk menyimpan gambar
                $tujuan_upload = 'images';
        
                // Pindahkan gambar ke direktori tujuan dengan nama asli
                $path = $file->move($tujuan_upload, $file->getClientOriginalName());
        
                // Buat record baru di tabel images dan sertakan id_project
                $project->image()->create([
                    'image' => $path,
                    'id_project' => $project->id, // Menyertakan id_article
                ]);
            }
        }


        // Redirect atau berikan respons sesuai kebutuhan
        return redirect('/dashboard/projects')->with('success', 'Project created successfully');
    }

    public function show($id){
        $id = Crypt::decrypt($id);
        $project = Project::find($id);
        // dd($project);

        return view('Dashboard.detail-project', ["project" => $project]);
    }

    public function getProjectsByYear(Request $request, $year)
{
    $projects = Project::with('image')->whereYear('date', $year)->get();

    if ($request->wantsJson()) {
        return response()->json(['projects' => $projects]);
    }

    return View::make('projects_by_year', compact('projects'));
}

    public function update(Request $request, $id)
{
    $request->validate([
        'project_name' => 'required',
        'client' => 'required',
        'date' => 'required',
        'location' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'body' => 'required',
    ]);

    $project = Project::find($id);

    $project->project_name = $request->input('project_name');
    $project->client = $request->input('client');
    $project->date = $request->input('date');
    $project->location = $request->input('location');
    $project->body = $request->input('body');

    // Handle images
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        foreach ($project->image as $image) {
            // Mengganti karakter '\' dengan '/'
            $path = str_replace('\\', '/', 'images/' . $image->image);
        
            if (file_exists($path)) {
                unlink($path);
            }
        
            $image->delete();
        }

        // Simpan gambar baru
        foreach ($request->file('image') as $file) {
                // Tentukan direktori tujuan untuk menyimpan gambar
                $tujuan_upload = 'images';
        
                // Pindahkan gambar ke direktori tujuan dengan nama asli
                $path = $file->move($tujuan_upload, $file->getClientOriginalName());
        
                // Buat record baru di tabel images dan sertakan id_project
                $project->image()->create([
                    'image' => $path,
                    'id_project' => $project->id, // Menyertakan id_project
                ]);
        }
    }

    $project->save();

    return redirect('/dashboard/projects')->with('success', 'Project updated successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);  

        $project = Project::findOrFail($id);
    
        // Hapus artikel dan gambar-gambar yang terkait di sini
        $project->delete();
    
        foreach($project->image as $image){
            $image->delete();
        }
    
        return back()->with('success', 'Project deleted successfully!');
    }
}
