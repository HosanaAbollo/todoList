<?php

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Création de 10 faux contenu pour la table Todo
        factory(App\Todo::class, 10)->create();
    }
}
