@extends('layout')

@section('content')
    
    <div id="app" class="container">
        <section class="text-center m-4">
            <h1>Borrar libro</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        <form  method="post" action="/books/{{$book->id}}">
                @method('delete')
                @csrf
                <h2>Eliminar libro con el título: {{$book->title}}</h2>

                
                <button class="btn btn-primary btn-lg btn-block" type="submit">Eliminar</button>
            </form>
        </section>
    </div>
@endsection