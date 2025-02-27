<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UsabilidadePerguntasSeeder;
use Database\Seeders\SaudeMentalPerguntasSeeder;
use Database\Seeders\AlimentacaoPerguntasSeeder;
use Database\Seeders\HidratacaoPerguntasSeeder;
use Database\Seeders\OdmPerguntasSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsabilidadePerguntasSeeder::class,
            SaudeMentalPerguntasSeeder::class,
            AlimentacaoPerguntasSeeder::class,
            HidratacaoPerguntasSeeder::class,
            OdmPerguntasSeeder::class,
        ]);
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
