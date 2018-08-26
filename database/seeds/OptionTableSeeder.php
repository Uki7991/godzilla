<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Option::create([
            'name' => 'Godzilla',
            'tel1' => '+996 (700) 700 - 700',
        ]);
    }
}
