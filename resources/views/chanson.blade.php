@extends('layout.template')
    @section('content')

    <h1>Chansons</h1>
<div class="container">
    <div class="row">
    @foreach($chansons as $chanson)
        <div class="col-md-4 col-12 col-lg-4">
        <div class="card" style="width: 18rem;">
  <img src="{{ $chanson->img }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Titre : {{ $chanson->titre }}</h5>
    <p class="card-text">Artiste : {{ $chanson->auteur }}</p>
    <p class="card-text">Année : {{ $chanson->annee }}</p>
    <a href="album/{{$chanson -> id}}" class="btn btn-primary">voir plus</a>
  </div>
</div>
        </div>       
        @endforeach
    </div>
</div>

    @endsection