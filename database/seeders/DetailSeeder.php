<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Charmaine Wilkerson',
            'publisher' => 'Camp Nou',
            'year' => 2022,
            'description' => 'Enter to win a galley of BLACK CAKE!.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Mesha Maren',
            'publisher' => 'Old Trafford',
            'year' => 2022,
            'description' => 'In a fierce follow-up to her acclaimed debut novel Sugar Run, Mesha Maren weaves a suspenseful story about what brings our true selves to the surface.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Elena Medel',
            'publisher' => 'Friuli',
            'year' => 2022,
            'description' => 'Elena Medel shadows unforgettable characters as they search for meaning and stability while bringing half a century of the feminist movement to life.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Rebecca Serle',
            'publisher' => 'Atria Books',
            'year' => 2020,
            'description' => 'When Type-A Manhattan lawyer Dannie Kohan is asked this question at the most important interview of her career, she has a meticulously crafted answer at the ready.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Reg Keeland ',
            'publisher' => 'Knopf',
            'year' => 2008,
            'description' => 'Harriet Vanger, a scion of one of Sweden’s wealthiest families disappeared over forty years ago. All these years later, her aged uncle continues to seek the truth.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'James Nestor',
            'publisher' => 'Riverhead Books',
            'year' => 2020,
            'description' => 'The book examines the history, science, and culture of breathing and its impacts on human health. It investigates the history of how humans shifted from the natural state of nasal breathing to chronic mouth breathing.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Stephen Hawking',
            'publisher' => 'Hodder & Stoughton',
            'year' => 2018,
            'description' => 'Brief Answers to the Big Questions is a popular science book written by physicist Stephen Hawking, and published by Hodder & Stoughton (hardcover) and Bantam Books (paperback) on 16 October 2018. The book examines some of the universes greatest mysteries, and promotes the view that science is very important in helping to solve problems on planet Earth.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Richard',
            'publisher' => 'Addison–Wesley',
            'year' => 1964,
            'description' => 'The textbook comprises three volumes. The first volume focuses on mechanics, radiation, and heat, including relativistic effects. The second volume covers mainly electromagnetism and matter. The third volume covers quantum mechanics; for example, it shows how the double-slit experiment demonstrates the essential features of quantum mechanics.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Steven Levy',
            'publisher' => 'Anchor Press/Doubleday',
            'year' => 1984,
            'description' => ' Levy describes the people, the machines, and the events that defined the Hacker Culture and the Hacker Ethic, from the early mainframe hackers at MIT, to the self-made hardware hackers and game hackers.'
        ]);
        $i += 1;
        DB::table('details')->insert([
            'id' => $i,
            'book_id' => $i,
            'author' => 'Abdul Kadir',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2017,
            'description' => 'Buku yang sangat cocok untuk Anda yang sedang mempelajari dasar pemrograman komputer. Buku ini mengajarkan logika untuk menyelesaikan berbagai masalah yang ditangani oleh komputer dengan menggunakan Flowgorithm.'
        ]);


        $i += 1;
    }
}
