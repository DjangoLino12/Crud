<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Produto::create([
            'nome' => 'Brigadeiro',
            'descricao' => 'Doce muito absurdamente doce'
        ]);

        Produto::create([
            'nome' => 'Cajuzinho',
            'descricao' => 'Doce de amendoim'
        ]);

    }
}
