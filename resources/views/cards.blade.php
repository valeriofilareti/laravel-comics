@php
    $comics = config('comics')
@endphp

@extends('layout.main')


@section('cards')

<div class="cards-wrapper d-flex flex-column">
    <div class="mt-5">
        <h1 class="text-center my-5">COMICS</h1>

    </div>
    <div class="container cards d-flex">



        @foreach ($comics as $comic)

        <div class="myCard mb-5">
            <div class="image">
                <img src="{{ $comic['thumb'] }}">
            </div>
            <div class="text">
                <h3 class="txt">{{$comic['title']}}</h3>
            </div>
        </div>

        @endforeach

    </div>

</div>


@endsection

