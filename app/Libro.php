<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /* public $guarded = []; */
    protected $fillable = [
        'titulo','autor'
    ];

    public function getTituloAttribute()
    {
        return strtoupper($this->attributes['titulo']);// Para devolver varios.
    }
    
}
