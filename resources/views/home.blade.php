@extends("layoutsmain-layout")

@section("content")

<div class="text-center">
    <h1>Avaible comics</h1>

    <ul>
        @foreach($comics as $comic)
        <li>
            <a href="{{ route('show', $comic -> id}}"></a>
            {{$comic -> title}}
        </li>
    </ul>
</div>