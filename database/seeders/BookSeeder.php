<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 1,
            'title' => 'Black Cake'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 1,
            'title' => 'Perpetual West'
        ]);

        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 1,
            'title' => 'The Wonders'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 1,
            'title' => 'In Five Years'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 1,
            'title' => 'The Girl with the Dragon Tattoo'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 2,
            'title' => 'Breath: The New Science of a Lost Art'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 2,
            'title' => 'Brief Answers to the Big Questions'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 2,
            'title' => 'The Feynman Lectures on Physics'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 3,
            'title' => 'Hackers: Heroes of the Computer Revolution'
        ]);
        $i += 1;
        DB::table('books')->insert([
            'id' => $i,
            'category_id' => 3,
            'title' => 'Dasar Logika Pemrograman Komputer'
        ]);

        $i += 1;
    }
}
