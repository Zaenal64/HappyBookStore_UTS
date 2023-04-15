<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('categories')->insert([
            'id' => $i,
            'category' => 'Fiction'
        ]);
        $i += 1;
        DB::table('categories')->insert([
            'id' => $i,
            'category' => 'Science'
        ]);
        $i += 1;
        DB::table('categories')->insert([
            'id' => $i,
            'category' => 'Computer'
        ]);
        $i += 1;
        DB::table('categories')->insert([
            'id' => $i,
            'category' => 'History'
        ]);

    }
}
