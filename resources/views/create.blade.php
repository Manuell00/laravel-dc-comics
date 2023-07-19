@extends("layouts.main-layout")

@section("content")
<div class="text-center">
    <h1>Add new Comic</h1>

    <!-- Definisco la form -->
    <form method="POST" action="{{route('store')}}">

        <!-- Sicurezza -->
        @method('POST')
        @csrf

        {{-- TITOLO --}}
        <label for="title"><b>title : </b></label>
        <input 
        type="text" 
        name="title"
        id="title"
        class="@error('title') is-invalid @else is-valid @enderror my-3">

        {{-- error title --}}
        @error('title')
            <div class="alert alert-danger">{{ 'Devi inserire correttamente i valori del title' }}</div>
        @enderror

        <br>


        {{-- DESCRIZIONE --}}
        <label for="description"><b>description : </b></label>
        <input type="text" name="description" class="my-3">

        <br>


        {{-- THUMB --}}
        <label for="thumb"><b>thumb : </b></label>
        <input type="text" name="thumb" class="my-3">

        <br>

        {{-- PREZZO --}}
        <label for="price"><b>price : </b></label>
        <input type="text" name="price">

        <br>

        {{-- SERIE --}}
        <label for="series"><b>series : </b></label>
        <input type="text" name="series" class="my-3">

        <br>

        {{-- DATA VENDITA --}}
        <label for="sale_date"><b>sale_date : </b></label>
        <input type="date" name="sale_date">

        <br>

        {{-- TIPOLOGIA --}}
        <label for="type"><b>type : </b></label>
        <input type="text" name="type" class="my-3">

        <br>

        <!-- SUBMIT -->
        <input class="py-2 mx-2 my-4" type="submit" value="CREATE">


    </form>

</div>

@endsection