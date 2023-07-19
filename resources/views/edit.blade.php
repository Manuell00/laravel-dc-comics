@extends("layouts.main-layout")

@section("content")
<div class="text-center">
    <h1>Edit a Comic</h1>

    <!-- Definisco la form -->
    <form method="POST" action="{{route('update', $comic->id)}}">

        <!-- Sicurezza -->
        @method('POST')
        @csrf

        <label for="title"><b>title : </b></label>
        <input type="text" name="title"  value="{{$comic->title}}">

        <br>

        <label for="description"><b>description : </b></label>
        <input type="text" name="description" value="{{$comic->description}}">

        <br>

        <label for="thumb"><b>thumb : </b></label>
        <input type="text" name="thumb" value="{{$comic->thumb}}">

        <br>

        <label for="price"><b>price : </b></label>
        <input type="text" name="price" value="{{$comic->price}}">

        <br>

        <label for="series"><b>series : </b></label>
        <input type="text" name="series" value="{{$comic->series}}">

        <br>

        <label for="sale_date"><b>sale_date : </b></label>
        <input type="date" name="sale_date" value="{{$comic->sale_date}}">

        <br>

        <label for="type"><b>type : </b></label>
        <input type="text" name="type" value="{{$comic->type}}">

        <br>

        <!-- Definisco un input di submit -->
        <input class="py-2 mx-2 my-4" type="submit" value="MODIFY">


    </form>

</div>

@endsection