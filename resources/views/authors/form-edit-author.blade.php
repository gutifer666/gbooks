@extends('layout')
@section('content')
<div id="app" class="container">
    <section class="text-center m-4">
        <h1>Editar autor</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form  method="post" action="/authors/{{$author->id}}">
            @method('PUT')
            @csrf
            
            <div class="form-group">
            <input type="text" class="form-control" name="name" value="{{$author->name}}">
            </div>

            <div class="form-group">
                <input type="text"  class="form-control" name="nationality" value="{{$author->nationality}}">
            </div>

            <div class="form-group">
                <input type="year"  class="form-control" name="year" value="{{$author->year}}">
            </div>

            <div class="form-group">
                <input class="form-control" name="books" value="{{$author->books}}">
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Editar</button>
        <p>{{$author->id}}</p>
        </form>
    </section>
</div>
@endsection