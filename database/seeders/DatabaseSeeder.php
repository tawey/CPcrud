<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use Database\Factories\EtudiantFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Etudiant::factory(30)->create();

        // $this->call(ClasseTableSeeder::class);
    }
}
