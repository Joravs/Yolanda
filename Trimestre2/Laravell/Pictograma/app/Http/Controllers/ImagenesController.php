<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;

class ImagenesController extends Controller
{
    public function getContent()
    {
        $imgs = Imagenes::all();
        dd($imgs);
        return view('catalog.index', compact('imgs'));
    }
}
