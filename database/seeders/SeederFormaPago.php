<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederFormaPago extends Seeder
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
                'id'=>1,
                'descripcion'=>'efectivo'
            ],
            [
                'id'=>2,
                'descripcion'=>'Tarjeta Credito'
            ],
            [
                'id'=>3,
                'descripcion'=>'Tarjeta Debito'
            ]
        ];
        DB::table('formapago')->insert($datos);
    }
}
