<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class perfumes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // database/seeders/ParfumSeeder.php or in tinker
        DB::table('products')->insert([
            [
                'nom_de_parfum' => 'Élégance Nocturne',
                'path_image' => 'perfumes/Elegance.jpeg',
                'prix' => 89.99,
                'description' => 'Un parfum mystérieux aux notes de vanille noire et bois de santal.',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom_de_parfum' => 'Lumière d\'Été',
                'path_image' => 'perfumes/lumière.jpeg',
                'prix' => 65.50,
                'description' => 'Fraîcheur citronnée avec une touche florale de jasmin.',
                'disponible' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom_de_parfum' => 'Oud Royal',
                'path_image' => 'perfumes/oud.jpeg',
                'prix' => 120.00,
                'description' => 'Oud intense mélangé à des épices orientales pour un parfum puissant.',
                'disponible' => true, 
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
