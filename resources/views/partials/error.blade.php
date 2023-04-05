@if($errors->any())
    <div class="alert alert-danger d-inline-block">
        <ul class="m-0 ps-0">
            {{-- @foreach($errors->all() as $error) --}}
            {{-- <li>{{ $error }}</li> --}}
                <div>You did somethig wrong, please check below to find your error!</div>
            {{-- @endforeach --}}
        </ul>
    </div>
@endif

{{-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}