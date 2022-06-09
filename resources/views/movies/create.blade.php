@extends('layouts.app')

@section('content')
<div class="card my-5">
    <div class="card-body">
        <h1>Add New Movie</h1>
        <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" name="image" >
            </div>
            <div class="form-group">
                <label>Rating Star</label>
                <input type="text" class="form-control" name="rating_star" >
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="10"></textarea>
            </div>
            <div class="card-header d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary me-md-2">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection