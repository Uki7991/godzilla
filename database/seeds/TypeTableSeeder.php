<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Пицца'
        ]);
        Type::create([
            'name' => 'Суши'
        ]);
        Type::create([
            'name' => 'Первые блюда'
        ]);
        Type::create([
            'name' => 'Вторые блюда'
        ]);
    }
}
