<?php

namespace App;

use \App\Author;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'year',
        'argument',
        'isbn',
        'author_id'

    ];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
