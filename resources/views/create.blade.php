@extends("layouts.main-layout")

@section("content")
<div class="text-center">
    <h1>Add new Comic</h1>

    <!-- Definisco la form -->
    <form method="POST" action="{{route('store')}}">

        @csrf

        <label for="title"><b>title : </b></label>
        <input type="text" name="title">

        <br>

        <label for="description"><b>description : </b></label>
        <input type="text" name="description">

        <br>

        <label for="thumb"><b>thumb : </b></label>
        <input type="text" name="thumb">

        <br>

        <label for="price"><b>price : </b></label>
        <input type="text" name="price">

        <br>

        <label for="series"><b>series : </b></label>
        <input type="text" name="series">

        <br>

        <label for="sale_date"><b>sale_date : </b></label>
        <input type="date" name="sale_date">

        <br>

        <label for="type"><b>type : </b></label>
        <input type="text" name="type">

        <br>

        <!-- Definisco un input di submit -->
        <input class="py-2 mx-2 my-4" type="submit" value="CREATE">


    </form>

</div>

@endsection