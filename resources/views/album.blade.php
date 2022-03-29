@extends('layout.template')
    @section('content')
    <h1>{{ $chanson->titre }}</h1>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-12 col-lg-4">
        <div class="card" style="width: 18rem;">
  <img src="{{ $chanson->img }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Titre : {{ $chanson->titre }}</h5>
    <p class="card-text">Artiste : {{ $chanson->auteur }}</p>
    <p class="card-text">Année : {{ $chanson->annee }}</p>
  </div>
</div>
        </div>       
    </div>
</div>
    @endsection