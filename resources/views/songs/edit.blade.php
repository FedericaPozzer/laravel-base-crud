@extends("layouts.app")

@section("page-name", "Edit Song " . $song->title)

@section("main-content")

    @include("partials.error")


    <h2 class="yellow mb-3">Modify the song!</h2>

    <form action="{{ route("songs.update", $song) }}" method="POST" class="yellow row">
        @method("PUT")
        @csrf

        <div class="col-7 col-offset-5 my-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title") ?? $song->title }}">
            @error("title")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control @error("album") is-invalid @enderror" id="album" name="album" value="{{ old("album") ?? $song->album }}">
            @error("album")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control @error("author") is-invalid @enderror" id="author" name="author" value="{{ old("author") ?? $song->author }}">
            @error("author")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="editor" class="form-label">Editor</label>
            <input type="text" class="form-control @error("editor") is-invalid @enderror" id="editor" name="editor" value="{{ old("editor") ?? $song->editor }}">
            @error("editor")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="length" class="form-label">Length</label>
            <input type="text" class="form-control @error("length") is-invalid @enderror" id="length" name="length" value="{{ old("length") ?? $song->length }}">
            @error("length")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>

        <div class="col-7 col-offset-5 my-3">
            <label for="poster" class="form-label">poster</label>
            <input type="text" class="form-control @error("poster") is-invalid @enderror" id="poster" name="poster" value="{{ old("poster") ?? $song->poster }}">
            @error("poster")
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    
        <div class="mt-4 d-flex">
            <button type="submit" class="btn btn-outline-warning">Save</button>
        </div>
    </form>
    
@endsection