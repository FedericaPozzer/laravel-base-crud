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
            <td class="action-cell">
                <a href="{{ route('songs.show', ['song' => $song]) }}"> <i class="bi bi-file-music"></i> </a>
                <a href="{{ route('songs.edit', ['song' => $song]) }}"> <i class="bi bi-pencil mx-3"></i> </a>
                <button class="bi bi-trash text-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$song->id}}"></button>

                {{-- <form action="{{ route('songs.destroy', $song) }}" method="POST">
                    @method("delete")
                    @csrf
                    <button class="bi bi-trash text-danger"></button>
                </form> --}}
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $songs->links("pagination::bootstrap-5") }}

@endsection

@section("modals")
@foreach($songs as $song)

<div class="modal fade" id="delete-modal-{{$song->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Warning!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you wanna delete {{$song->title}} by {{$song->author}}? <br> This operation is not reversible!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go back</button>
        {{-- <button type="button" class="btn btn-primary">Delete the song</button> --}}
        <form action="{{ route('songs.destroy', $song) }}" method="POST">
            @method("delete")
            @csrf
            <button type="submit" class="btn btn-danger">Delete the song</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endforeach
@endsection