@extends('layouts.app')
@section('content')
<h1 class="text-danger text-center pt-2 pb-5">CONGRATULAZIONI, HAI VINTO UN BIGLIETTO OMAGGIO PER UNO DEI SEGUENTI FILM: </h1>
<div class="container">
    <div class="row">
        @foreach($movies as $movie)
        <div class="card d-flex justify-content-center align-items-center py-3">
            <h4>{{$movie->title}}</h4>
            <p>Titolo Originale: {{$movie->original_title}}</p>
            <p>Nazionalita': {{$movie->nationality}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection