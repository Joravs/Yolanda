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
    public function postAdd(Request $request){
        $agenda= new Agenda;
        $agenda->fecha=$request->fecha;
        $agenda->hora=$request->hora;
        $agenda->idpersona=$request->id;
        $agenda->idimagen=$request->radio;
        $agenda->save();
        return redirect()->route('agenda.add')->with('info','Agenda añadida correctamente');
    }
    public function getBuscar(){
        $personas= Personas::all();
        return view('agenda.buscar',compact('personas'));
    }
    public function postMostrar(Request $request){
        $agenda=Agenda::select('imagenes.imagen', 'agenda.fecha','agenda.hora','personas.nombre','personas.apellidos')
            ->join('imagenes', 'imagenes.id', '=', 'agenda.idimagen')
            ->join('personas', 'personas.id', '=', 'agenda.idpersona')
            ->where('agenda.idpersona',$request->id)
            ->where('agenda.fecha',$request->fecha)
            ->get();
        return view('agenda.mostrar',compact('agenda'));
    }
}
