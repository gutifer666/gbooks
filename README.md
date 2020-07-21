# Laravel UI
 + composer require laravel/ui
 + php artisan ui bootstrap
 + npm install && npm run dev


 # View
     $libros = [Array];
     return view('books.list', compact('libros'));

# Models
    php artisan make:model Libro

# La Base de Datos

  + Las Migraciones

    php artisan make:model -m Libro
    php artisan migrate

  + En el modelo podemos realizar varias operaciones relacionadas con nuestra DB.

    + Indicar qué atributos puedo insertar desde fuera.

      + protected $fillable = [
          'titulo','autor'
        ];
      
      + Cualquiera. 

        public $guarded = [];

    + Computar atributos de la base de datos.
      
      public function getTituloAttribute()
        {
          return strtoupper($this->attributes['titulo']);// Para devolver varios.
        }

  + De estas dos maneras añado datos a la DB desde Tinker:

    >> use App\Libro

    >> $libro = new Libro(['titulo' => 'Mi Ibiza privada','autor' => 'Antonio Escohotado'])
    >> $libro->save()

    >> (new Libro(['titulo' => 'Un mundo feliz','autor' => 'Aldous Huxley']))->save()

  + En este punto podemos acceder a la base de datos.

      $libros = Libro::all(); 

  + Envío de datos desde el formulario a la DB.

      <form method="post" action="/books/add"> ((VISTA))

      Route::post('/books/add', 'BooksController@addToDB'); ((RUTA))

      public function addToDB(Request $request) ((CONTROLADOR))
          {
            Libro::create($request->all());
            return redirect('/');
          }
## Validación de datos del formulario

  + Antes del formulario insertamos lo siguiente.

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

+ En el controlador, antes de crear el libro.

        $request->validate(
            [
             'titulo' => 'required',
             'autor' => 'required'
            ]
        );

* CAMBIAR $guarded por $fillable en el modelo Libro.php


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
