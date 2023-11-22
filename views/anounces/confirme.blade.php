@extends('compoment.master')

@section('title','Confirme Post')
@section('h2','Confirme Post')


@section('content')
<form action="{{ route('anounces.destroy', $anounce->id) }}" method="post">
    @csrf
    @method('delete')
    <div class="mb-3">
        <p> sure you want to delete this post? </p>
        <button type="submit" class="btn btn-danger">Yes</button>
        <a href="{{ route('anounces.index') }}" class="btn 
        btn-primary">No</a>
    </div>
@endsection