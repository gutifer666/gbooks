@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Editar libro</h1>

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
            @method('PUT')
            @csrf
            
            <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{$book->title}}">
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="author" value="{{$book->author}}">
            </div>

            <div class="form-group">
                <input type="year"  class="form-control" name="year" value="{{$book->year}}">
            </div>

            <div class="form-group">
                <input class="form-control" name="argument" value="{{$book->argument}}">
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="isbn" value="{{$book->isbn}}">
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Editar</button>
        <p>{{$book->id}}</p>
        </form>
    </section>
</div>
@endsection