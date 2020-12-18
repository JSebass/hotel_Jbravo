<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederFactura extends Seeder
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
                'numero'=>1,
                'cliente'=>2,
                'formaPago'=>1,
                'entrada'=>'2020-09-05',
                'salida'=>'2020-09-06'
            ],
            [
                'numero'=>1,
                'cliente'=>1,
                'formaPago'=>3,
                'entrada'=>'2020-08-09',
                'salida'=>'2020-08-10'
            ],
            [
                'numero'=>3,
                'cliente'=>3,
                'formaPago'=>2,
                'entrada'=>'2020-09-05',
                'salida'=>'2020-09-06'
            ],
            [
                'numero'=>2,
                'cliente'=>5,
                'formaPago'=>3,
                'entrada'=>'2020-09-05',
                'salida'=>'2020-09-06'
            ],
            [
                'numero'=>4,
                'cliente'=>4,
                'formaPago'=>2,
                'entrada'=>'2020-09-05',
                'salida'=>'2020-09-06'
            ]
        ];
        DB::table('factura')->insert($datos);
    }
}
