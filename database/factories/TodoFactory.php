<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// On utilise le modèle pour récupérer les champs 
use App\Model;

use Faker\Generator as Faker;


/*
    Cette factorie va permettre de generer du faux contenu pour les champs retournés
    On utilise cette factorie vie les seeders
*/
$factory->define('App\Todo'::class, function (Faker $faker) {
    return [

        'nom' => $faker->sentence(3),
        
        'description' => $faker->paragraph(4),

        'complet' => false
    ];
});
