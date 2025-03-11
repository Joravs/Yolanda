<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personas;
use Illuminate\Support\Facades\DB;

class PersonasTableSeeder extends Seeder
{
    private $jsonPersonas='[
{"id":"1","nombre":"Carlos","apellidos":"Perez","edad":"5"},
{"id":"2","nombre":"Juan","apellidos":"Lopez","edad":"7"},
{"id":"3","nombre":"Manuel","apellidos":"Fernandez","edad":"10"}
]';
    public function run(): void
    {
        self::personasSeed();
    }
    private function personasSeed()
    {
        DB::table('personas')->delete();
        $personas = json_decode($this->jsonPersonas, true);
        foreach ($personas as $persona) {
            $p = new Personas;
            $p->id = $persona['id'];
            $p->nombre = $persona['nombre'];
            $p->apellidos = $persona['apellidos'];
            $p->edad = $persona['edad'];
            $p->save();
        }
    }
}
