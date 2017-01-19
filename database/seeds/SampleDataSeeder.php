<?php

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tolkien = Author::create([
        	'name' => 'J.R.R Tolkien',
        	'date_of_birth' => '1892-01-03'
        ]);

        Book::create([
        	'title' => 'The Hobbit',
        	'publication_date' => '1937-09-21',
        	'isbn' => '9780582186552',
        	'author_id' => $tolkien->id
        ]);
    }
}
