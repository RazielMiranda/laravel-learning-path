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
        // $this->call(UserSeeder::class);

        DB::table('produtos')->insert([
            // 'nome_produto' => 'teste sobre seeder',
            'nome_produto' =>Str::random(10),
            'id_user' => 3,
            'quantidade' => 211,
        ]);
    }
}
