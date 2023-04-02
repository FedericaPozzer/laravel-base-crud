@extends("layouts.app")

@section("page-name", "homepage")

@section("main-content")

    <div class="container">
        <h2> 
            <a href="{{ route('songs.index') }}">
                Go to the songs list!
            </a>
        </h2>

    </div>

@endsection