<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome' => 'Doces',
        ]);

        Categoria::create([
            'nome' => 'Salgados',
        ]);
        
        Categoria::create([
            'nome' => 'Bebidas',
        ]);
    }
}
