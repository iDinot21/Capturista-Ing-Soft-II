<?php

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
        // Ejecutar seeders en orden correcto (respetando dependencias)
        $this->call([
            UsuariosSeeder::class,
            CategoriasHerramientasSeeder::class,
            HerramientasSeeder::class,
            CasosSeeder::class,
            ChatbotsSeeder::class,
        ]);
        
        $this->command->info('¡Todos los seeders ejecutados correctamente!');
    }
}
