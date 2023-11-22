@extends('compoment.master')

@section('title','Update Post')
@section('h2','Update Post')


@section('content')
<form class="form-group" action="{{ route('anounces.update', $anounce->id) }}" method="post">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="tit">Titre</label>
    <input type="text" value="{{ $anounce->titre }}" class="form-control" id="tit" placeholder="titre" name="titre">
  </div>

  <div class="form-group">
    <label for="des">description</label>
    <textarea id="des" name="description" class="form-control" rows="3">{{ $anounce->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="type">type</label>
    <select name="type" class="form-control" id="type">
      <option value="Appartement">Appartement</option>
      <option value="Maison">Maison</option>
      <option value="Villa">Villa</option>
      <option value="Magasin">Magasin</option>
      <option value="Terrain">Terrain</option>
    </select>
  </div>

  <div class="form-group">
    <label for="ville">ville</label>
    <input value="{{ $anounce->ville }}" type="text" id="ville" class="form-control" placeholder="ville" name="ville">
  </div>

  <div class="form-group">
    <label for="sup">superficie</label>
    <input value="{{ $anounce->superficie }}" id="sup" type="text" class="form-control" placeholder="superficie" name="superficie">
  </div>

  <div class="form-group">
    <label for="neuf">neuf</label>
    <input value="{{ $anounce->neuf }}" type="text" id="neuf" class="form-control" placeholder="neuf" name="neuf">
  </div>

  <div class="form-group">
    <label for="prix">prix</label>
    <input id="prix" value="{{ $anounce->prix }}" type="text" class="form-control" placeholder="prix" name="prix">
  </div>
  <button type="submit" class="btn btn-primary"><i class="bi bi-bookmark-check-fill"></i> save</button>
</form>
@endsection