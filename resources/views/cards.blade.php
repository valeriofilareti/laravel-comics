@php
    $comics = config('comics')
@endphp
@extends('layout.main')

@section('cards')
<h1>CARDS</h1>
<div class="container cards d-flex">


    @foreach ($comics as $comic)

    <div class="myCard">
        <div class="image">
            <img src="{{ $comic['thumb'] }}">
        </div>
        <div class="text">
            <h3 class="txt">{{$comic['title']}}</h3>
        </div>
    </div>

    @endforeach

</div>
@endsection

