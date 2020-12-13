<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insert_values extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poets')->insert([
            'first_name'=>'Octavio',
            'surname'=>'Paz',
            'address'=>'Sin valor',
            'postcode'=>'Sin valor',
            'telephone_number'=>'Sin valor'
        ]);

        DB::table('poets')->insert([
            'first_name'=>'Xavier',
            'surname'=>'Villaurrutia',
            'address'=>'Sin valor',
            'postcode'=>'Sin valor',
            'telephone_number'=>'Sin valor'
        ]);

        DB::table('poets')->insert([
            'first_name'=>'Manuel',
            'surname'=>'Acuna',
            'address'=>'Sin valor',
            'postcode'=>'Sin valor',
            'telephone_number'=>'Sin valor'
        ]);

        DB::table('poets')->insert([
            'first_name'=>'Manuel',
            'surname'=>'Gutierrez Najera',
            'address'=>'Sin valor',
            'postcode'=>'Sin valor',
            'telephone_number'=>'Sin valor'
        ]);

        DB::table('poets')->insert([
            'first_name'=>'Salvador',
            'surname'=>'Diaz Miron',
            'address'=>'Sin valor',
            'postcode'=>'Sin valor',
            'telephone_number'=>'Sin valor'
        ]);
    }
}
