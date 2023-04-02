@extends ("layouts.app")

@section("page-name", "Song Detail")


@section("main-content")
    
    <div class="container">

        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row g-0">
             <div class="col-md-4">
                <img src="{{ $song->poster }}" class="img-fluid rounded-start" alt="poster">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> {{ $song->title }} - {{ $song->author }} <small class="text-muted ms-3">({{$song->length}} min)</small></h5>
                    <p class="card-text mt-3"> Album: {{ $song->album }} </p>
                    <p class="card-text"> Published by {{ $song->editor }} </p>
                </div>
                </div>
            </div>
        </div>

    </div>

@endsection 