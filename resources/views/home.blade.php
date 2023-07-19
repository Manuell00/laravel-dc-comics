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
            <br>

            <div class="row justify-content-center">
                <a class="col-1 btn btn-primary" href="{{ route('edit', $comic -> id)}}">EDIT</a>
    
                <form class="col-1" action="{{ route('delete', $comic -> id)}}">
                    <!-- Sicurezza -->
                    @method('POST')
                    @csrf
                    <input type="submit" class="btn btn-primary" value="DELETE">
                </form>
            </div>
            <br>
        </li>
        @endforeach
    </ul>
    <span><a href=" {{route('create')}}">Add Comic</a></span>
</div>







@endsection