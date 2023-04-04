@extends ("layouts.app")

@section("page-name", "Lista delle canzoni")


@section("main-content")

{{-- id title album author editor length poster --}}
    <h2 class="yellow">Songs list:</h2>

    <div class="my-3 d-flex w-100 justify-content-end">
        <a href="{{ route('songs.create') }}" type="button" class="btn btn-outline-warning">+ add new song</a>
    </div>
   
    <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">TITLE</th>
            <th scope="col">AUTHOR</th>
            <th scope="col">LENGTH</th>
            <th scope="col">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
            <tr>
            <th scope="row">{{$song->id}}</th>
            <td>{{$song->title}}</td>
            <td>{{$song->author}}</td>
            <td>{{$song->length}}</td>
            <td>
                <a href="{{ route('songs.show', ['song' => $song]) }}"> <i class="bi bi-file-music"></i> </a>
                <a href="{{ route('songs.edit', ['song' => $song]) }}"> <i class="bi bi-pencil mx-3"></i> </a>
                <a href="{{ route('songs.show', ['song' => $song]) }}"> <i class="bi bi-trash"></i> </a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $songs->links("pagination::bootstrap-5") }}

@endsection
