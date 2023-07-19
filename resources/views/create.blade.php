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
        class="@error('title') is-invalid @else is-valid @enderror my-3">

        {{-- error title --}}
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>


        {{-- DESCRIZIONE --}}
        <label for="description"><b>description : </b></label>
        <input type="text" name="description" class="my-3"
        class="@error('description') is-invalid @else is-valid @enderror my-3">

         {{-- error description --}}
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>


        {{-- THUMB --}}
        <label for="thumb"><b>thumb : </b></label>
        <input type="text" name="thumb" class="my-3"
         class="@error('thumb') is-invalid @else is-valid @enderror my-3">

             {{-- error thumb --}}
        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        {{-- PREZZO --}}
        <label for="price"><b>price : </b></label>
        <input type="text" name="price"      
        class="@error('price') is-invalid @else is-valid @enderror my-3">

         {{-- error price --}}
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        {{-- SERIE --}}
        <label for="series"><b>series : </b></label>
        <input type="text" name="series" class="my-3"
         class="@error('series') is-invalid @else is-valid @enderror my-3">

         {{-- error series --}}
        @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        {{-- DATA VENDITA --}}
        <label for="sale_date"><b>sale_date : </b></label>
        <input type="date" name="sale_date"      
        class="@error('sale_date') is-invalid @else is-valid @enderror my-3">

         {{-- error sale_date --}}
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        {{-- TIPOLOGIA --}}
        <label for="type"><b>type : </b></label>
        <input type="text" name="type" class="my-3" 
        class="@error('type') is-invalid @else is-valid @enderror my-3">

         {{-- error type --}}
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>

        <!-- SUBMIT -->
        <input class="py-2 mx-2 my-4" type="submit" value="CREATE">


    </form>

</div>

@endsection