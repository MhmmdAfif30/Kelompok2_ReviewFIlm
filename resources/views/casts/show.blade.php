@extends('layouts.app')

@section('content')
<div class="card my-4">
    <img class="card-image-top" src="{{ $cast->image }}">
    <div class="card-body bg-warning">
        <h1>{{ $cast->name}}</h1>
        <p>All Movies Of {{ $cast->name}}</p>
        <ul class="list-group list-group-flush">
            @if(count($cast->movies))
            @foreach ($cast->movies as $movie)
            <li class="list-group-item">
                <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
    <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
        <form action="{{ route('casts.destroy', $cast->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger float-right">Delete</button>
        </form>
    </div>
</div>


@endsection