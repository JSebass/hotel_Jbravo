<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederHabitaciones extends Seeder
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
                'descripcion'=>'Habitacion sencilla con vista al exterior del hotel',
                'numCamas'=>1,
                'foto'=>'hab1.jpg',
                'precioId'=>1
            ],
            [
                'descripcion'=>'Habitacion doble con balcon',
                'numCamas'=>2,
                'foto'=>'hab2.jpg',
                'precioId'=>2
            ],
            [
                'descripcion'=>'Habitacion perfecta para una pareja',
                'numCamas'=>1,
                'foto'=>'hab3.jpg',
                'precioId'=>3
            ],
            [
                'descripcion'=>'Espectacular suite del hotel',
                'numCamas'=>1,
                'foto'=>'hab4.jpg',
                'precioId'=>4
            ],
            [
                'descripcion'=>'Habitacion especial con muchas sorpresas',
                'numCamas'=>2,
                'foto'=>'hab5.jpg',
                'precioId'=>5
            ]
        ];
        DB::table('habitacion')->insert($datos);
    }
}
