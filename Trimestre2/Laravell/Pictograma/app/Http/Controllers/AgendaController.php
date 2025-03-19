<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Personas;
use App\Models\Imagenes;

class AgendaController extends Controller
{
    public function getAdd(){
        $personas=new Personas;
        $imagenes=new Imagenes;
        $personas= Personas::all();
        $imagenes= Imagenes::all();
        return view('agenda.add',compact('personas','imagenes'));
    }
}
