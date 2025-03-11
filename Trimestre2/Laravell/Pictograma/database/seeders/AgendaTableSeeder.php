<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;

class AgendaTableSeeder extends Seeder
{
    private $jsonAgenda='[
        {"id":"2","fecha":"2025-01-20","hora":"09:00:00","idpersona":"1","idimagen":"3"},
        {"id":"3","fecha":"2025-01-20","hora":"21:00:00","idpersona":"1","idimagen":"5"},
        {"id":"4","fecha":"2025-01-20","hora":"13:00:00","idpersona":"2","idimagen":"7"},
        {"id":"5","fecha":"2025-01-20","hora":"18:00:00","idpersona":"1","idimagen":"6"}
    ]';
    public function run(): void
    {
        self::agendaSeed();
    }
    public function agendaSeed()
    {
        DB::table('agenda')->delete();
        $agendas = json_decode($this->jsonAgenda, true);
        foreach ($agendas as $agenda) {
            $a = new Agenda;
            $a->id = $agenda['id'];
            $a->fecha = $agenda['fecha'];
            $a->hora = $agenda['hora'];
            $a->idpersona = $agenda['idpersona'];
            $a->idimagen = $agenda['idimagen'];
            $a->save();
        }
    }
}
