<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{
    public function getIndex()
    {
        $peliculas=new Movie;
        $peliculas = $peliculas->all();
        return view('catalog.index', compact('peliculas'));
    }
    public function getShow($id)
    {
        $peliculas=new Movie;
        $pelicula = $peliculas->findOrFail($id);
        return view('catalog.show',compact('pelicula')); 
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function postStore(Request $request)
    {
        $validateData= $request->validate([
            'title' => ['required','string','max:255'],
            'director' => ['required','string','max:64'],
            'year' => ['required','string','max:8'],
            'poster' => ['required','string'],
            'synopsis' => ['required','string'],
            'rented' => ['required','boolean' ]
        ]);
        $pelicula = Movie::create($validateData);
        return view('catalog.show',compact('pelicula'))->with('status','Pelicula creada correctamente');
    }

    public function getEdit($id)
    {
		$peliculas=new Movie;
        $pelicula = $peliculas->findOrFail($id);
        return view('catalog.edit',compact('pelicula'));
    }
    public function postEdit(Request $request)
    {
        $validateData = [
            'title' => $request['title'],
            'director' => $request['director'],
            'year' => $request['year'],
            'synopsis' => $request['synopsis'],
            'poster' => $request['poster'],
            'rented' => $request['rented']
        ];
        $pelicula = Movie::updateOrCreate(['id' => $request->id], $validateData);
        return redirect()->route('index')->with('status','Pelicula editada correctamente');
    }
}