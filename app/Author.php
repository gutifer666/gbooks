<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'nationality',
        'year'

    ];
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
