<?php

use App\Type;
use Illuminate\Database\Seeder;
use IvanLemeshev\Laravel5CyrillicSlug\Slug;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugObj = new Slug();

        Type::create([
            'name' => 'Пицца',
            'slug' => $slugObj->make('Пицца'),
        ]);
        Type::create([
            'name' => 'Суши',
            'slug' => $slugObj->make('Суши'),
        ]);
        Type::create([
            'name' => 'Первые блюда',
            'slug' => $slugObj->make('Первые блюда'),
        ]);
        Type::create([
            'name' => 'Вторые блюда',
            'slug' => $slugObj->make('Вторые блюда'),
        ]);
    }
}
