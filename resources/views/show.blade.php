@extends("layouts.main-layout")

@section("content")

<div class="text-center">
    <h1>{{$comic -> title}}</h1>
    <img src="{{ $comic -> thumb }}" width="350px">
    <p>
        {{$comic -> description}}
    </p>
    <div class="row justify-content-between py-3">
        <span class="col bg-dark text-light mx-3 rounded">
            {{ $comic -> series}}
        </span>
        <span class="col bg-dark text-light mx-3 rounded">
            {{ $comic -> price}}
        </span>
        <span class="col bg-dark text-light mx-3 rounded">
            {{ $comic -> sale_date}}
        </span>
        <span class="col bg-dark text-light mx-3 rounded">
            {{ $comic -> type}}
        </span>

    </div>

</div>

@endsection