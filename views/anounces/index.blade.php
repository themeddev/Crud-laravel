@extends('compoment.master')

@section('title','Anounces')
@section('h2','Anounces')

@section('content')
</br>
<a class="btn btn-sm btn-success" href={{ route('anounces.create') }}>Add anounce</a>

<div class="m-3">
@switch(session()->get('action'))
    @case('deleted')
        <div class="alert alert-danger">
            {{ session()->get('deleted') }}
        </div>
        @break
    @case('updated')
        <div class="alert alert-info">
            {{ session()->get('updated') }}
        </div>
        @break
    @case('created')
        <div class="alert alert-success">
            {{ session()->get('created') }}
        </div>
        @break
    @default
        <!-- Default case if 'action' does not match any of the cases -->
@endswitch
</div>



<!-- @if (session()->has('message'))
  <div class="alert alert-info">
    {{ session()->get('message') }}
  </div>
@endif -->

<table class="table table-hover">
  <thead class="table-light">
    <tr>
      <th>titre</th>
      <th>description</th>
      <th>type</th>
      <th>ville</th>
      <th>superficie</th>
      <th>neuf</th>
      <th colspan="2">prix</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($anounces as $anounce)
    <tr>
      <td>{{ $anounce->titre }}</td>
      <td>{{ $anounce->description }}</td>
      <td>{{ $anounce->type }}</td>
      <td>{{ $anounce->ville }}</td>
      <td>{{ $anounce->superficie }}</td>
      <td>{{ $anounce->neuf }}</td>
      <td>{{ $anounce->prix }}</td>
      <td>
        <a href="{{ route('anounces.edit', $anounce->id) }}"
         class="btn btn-primary btn-sm"><i class="bi bi-gear"></i></a>
        <form action="{{ route('anounces.destroy', $anounce->id) }}" method="anounce">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></i></button>
        </form>
        <a href="{{ route('anounces.show', $anounce->id) }}"
         class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
        
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection