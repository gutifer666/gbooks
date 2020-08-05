<?php

use App\Author;
use App\Book;
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
        factory(Author::class,50)->create();
        factory(Book::class,40)->create();
    }
}
