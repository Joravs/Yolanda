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
    public function getEdit($id)
    {
		$peliculas=new Movie;
        $pelicula = $peliculas->findOrFail($id);
        return view('catalog.edit',compact('pelicula'));
    }
    public function postEdit(Request $request)
    {
        dd($request->title);
    }
}