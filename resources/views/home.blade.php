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
                
                <form class="col-1" method="POST" action="{{ route('edit', $comic -> id)}}">
                    <!-- Sicurezza -->
                    @csrf
                    @method('PUT')
                    <input type="submit" class="btn btn-primary" value="EDIT">
                </form>

                <form class="col-1" method="POST" action="{{ route('delete', $comic -> id)}}">
                    <!-- Sicurezza -->
                    @csrf
                    @method('POST')
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