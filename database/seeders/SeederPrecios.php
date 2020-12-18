<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederPrecios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         /**$datos = [
            [
                'tipo'=>'Sencilla',
                'precio'=>30000
            ],
            [
                'tipo'=>'Doble',
                'precio'=>50000
            ],
            [
                'tipo'=>'Matrimonial',
                'precio'=>45000
            ],
            [
                'tipo'=>'Suite',
                'precio'=>70000
            ],
            [
                'tipo'=>'Especial',
                'precio'=>100000
            ]
        ];*/
        DB::table('precio')->insert([
            'id'=>1,
            'tipo'=>'Sencilla',
            'precio'=>30000
        ]);
        DB::table('precio')->insert([
            'id'=>2,
            'tipo'=>'Doble',
            'precio'=>50000
        ]);
        DB::table('precio')->insert([
            'id'=>3,
            'tipo'=>'Matrimonia',
            'precio'=>30000
        ]);
        DB::table('precio')->insert([
            'id'=>4,
            'tipo'=>'Suite',
            'precio'=>900000
        ]);
        DB::table('precio')->insert([
            'id'=>5,
            'tipo'=>'Especial',
            'precio'=>100000
        ]);
    }
}
