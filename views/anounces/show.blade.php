@extends('compoment.master')

@section('title','Post Detail')
@section('h2','Post Detail')


@section('content')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $anounce->titre }}</h5>
    <p class="card-text">{{ $anounce->description }}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{ $anounce->type }}</li>
    <li class="list-group-item">{{ $anounce->ville }}</li>
    <li class="list-group-item">{{ $anounce->superficie }}</li>
    <li class="list-group-item">{{ $anounce->neuf }}</li>
    <li class="list-group-item">{{ $anounce->prix }}</li>
  </ul>
</div>
@endsection