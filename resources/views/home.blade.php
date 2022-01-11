@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @foreach($movies as $movie)
        <div class="card">
            <h4>{{$movie->title}}</h4>
            <p>Titolo Originale: {{$movie->original_title}}</p>
            <p>Nazionalita': {{$movie->nationality}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection