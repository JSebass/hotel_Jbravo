<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederCliente extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [
            [
                'DNI'=>'0101',
                'Nombres'=>'Camilo Andres Diaz Muñoz',
                'Genero'=>'M',
                'Domicilio'=>'Crra 7 #10-56',
                'Telefono'=>'317808547',
                'Foto'=>'cli1.jpg'
            ],
            [
                'DNI'=>'1102',
                'Nombres'=>'Carlos Alirio Lopez Muñoz',
                'Genero'=>'M',
                'Domicilio'=>'Crra 20A #15-56',
                'Telefono'=>'320858547',
                'Foto'=>'cli2.jpg'
            ],
            [
                'DNI'=>'5872',
                'Nombres'=>'Leidy Tatiana Portilla Lagos',
                'Genero'=>'F',
                'Domicilio'=>'Crra 8 #18-45',
                'Telefono'=>'317858547',
                'Foto'=>'cli3.jpg'
            ],
            [
                'DNI'=>'15502',
                'Nombres'=>' Jose Armando Lopez Guepud',
                'Genero'=>'M',
                'Domicilio'=>'Crra 5 #5-14',
                'Telefono'=>'320658963',
                'Foto'=>'cli4.jpg'
            ],
            [
                'DNI'=>'4582',
                'Nombres'=>'Johan Sebastian Bravo Muñoz',
                'Genero'=>'M',
                'Domicilio'=>'Crra 7 #10-56',
                'Telefono'=>'378089789',
                'Foto'=>'cli5.jpg'
            ]
        ];
        DB::table('cliente')->insert($datos);
    }
}
