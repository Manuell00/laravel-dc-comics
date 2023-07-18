<!-- Estendo il main-layout -->
@extends("layouts.main-layout")

@section("content")
<div class="text-center">
    <h1>Available comics</h1>

    <ul>
        @foreach($comics as $comic)
        <li class="list-unstyled">

            <!-- Creo la show e gli passo l'id di comic -->
            <a href="{{ route('show', $comic -> id)}}">
                {{$comic -> title}}
            </a>


        </li>
        @endforeach
    </ul>
</div>







@endsection