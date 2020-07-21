<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function add()
    {
        return view('books.form');
    }
    public function addToDB(Request $request) // Para poder utiliza Request de forma interna en este método y no con un helper.
    {   
        $request->validate(
            [
             'titulo' => 'required',
             'autor' => 'required'
            ]
        );
        Libro::create($request->all());
        return redirect('/');
    }
    public function list()
    {
        $libros = Libro::all();

        return view('books.list', [
            'libros' => $libros
        ]);
    }
}
