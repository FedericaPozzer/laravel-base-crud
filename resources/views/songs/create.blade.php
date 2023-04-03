@extends("layouts.app")

@section("page-name", "New Song")

@section("main-content")

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

{{-- id title album author editor length poster --}}

    <h2 class="yellow mb-3">Add a new song to the Songs list!</h2>

    <form action="{{ route("songs.store") }}" method="POST" class="yellow row">
        @csrf

        <div class="col-7 col-offset-5 my-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control" id="album" name="album">
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="editor" class="form-label">Editor</label>
            <input type="text" class="form-control" id="editor" name="editor">
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="length" class="form-label">Length</label>
            <input type="text" class="form-control" id="length" name="length">
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="poster" class="form-label">poster</label>
            <input type="text" class="form-control" id="poster" name="poster">
        </div>
    
        <div class="mt-4 d-flex">
            <button type="submit" class="btn btn-outline-warning">Save</button>
        </div>
    </form>
    
@endsection