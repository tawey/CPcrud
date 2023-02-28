<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('classes')->insert([
            ['libelle'=>'6ieme'],
            ['libelle'=>'5ieme'],
            ['libelle'=>'4ieme'],
            ['libelle'=>'3ieme'],
            ['libelle'=>'seconde'],
            ['libelle'=>'premiere'],
            ['libelle'=>'terminale'],
            
        ]);
    }
}
