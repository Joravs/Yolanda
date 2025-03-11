<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Imagenes;
use Illuminate\Support\Facades\DB;

class ImagenesTableSeeder extends Seeder
{
    private $jsonImagenes='[
{"id":"1","categoria":"aseo","imagen":"imagenes\/banarse.jpg","descripcion":"imagen que representa el baño"},
{"id":"3","categoria":"alimentacion","imagen":"imagenes\/desayunar.jpg","descripcion":"imagen que representa el desay"},
{"id":"4","categoria":"tareas escolares","imagen":"imagenes\/colegio_pic.jpg","descripcion":"imagen que representa el coleg"},
{"id":"5","categoria":"salud","imagen":"imagenes\/dentista_pic.png","descripcion":"imagen que representa ir a dor"},
{"id":"6","categoria":"ocio","imagen":"imagenes\/jugar.png","descripcion":"imagen que representa ir al co"},
{"id":"7","categoria":"ocio","imagen":"imagenes\/playa_pic.png","descripcion":"imagen que representa las hora"},
{"id":"8","categoria":"ocio","imagen":"imagenes\/piscina_pic.png","descripcion":"imagen que representa lavar lo"},
{"id":"9","categoria":"aseo","imagen":"imagenes\/vestirse.jpg\r\n","descripcion":"imagen que representa  vestirs"},
{"id":"10","categoria":"tareas escolares","imagen":"imagenes\/comer.jpg","descripcion":"imagen que representa lectura"}
]';
    public function run(): void
    {
        self::imagenesSeed();
    }
    public function imagenesSeed()
    {
        DB::table('imagenes')->delete();
        $imagenes = json_decode($this->jsonImagenes, true);
        foreach ($imagenes as $imagen) {
            $i = new Imagenes;
            $i->id = $imagen['id'];
            $i->categoria = $imagen['categoria'];
            $i->imagen = $imagen['imagen'];
            $i->descripcion = $imagen['descripcion'];
            $i->save();
        }
    }
}
