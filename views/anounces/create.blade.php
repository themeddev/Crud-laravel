@extends('compoment.master')

@section('title','Create Post')
@section('h2','Create Post')


@section('content')
<form class="form-group" action="{{ route('anounces.store') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre</label>
    <input type="text" class="form-control" id="titre" placeholder="titre" name="titre">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">description</label>
    <textarea name="description" class="form-control" rows="3"></textarea>
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
    <input type="text" id="vill" class="form-control" placeholder="ville" name="ville">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">superficie</label>
    <input type="text" class="form-control" placeholder="superficie" name="superficie">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">neuf</label>
    <input type="text" class="form-control" placeholder="neuf" name="neuf">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">prix</label>
    <input type="text" class="form-control" placeholder="prix" name="prix">
  </div>
  <button type="submit" class="btn btn-primary"><i class="bi bi-house-add-fill"> </i>Create Post</button>
</form>
@endsection