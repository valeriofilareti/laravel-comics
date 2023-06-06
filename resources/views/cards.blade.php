
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
                <a href="{{ route('details', ['slug' => $comic['slug']]) }}">
                    <img src="{{ $comic['thumb'] }}">
                </a>
            </div>
            <div class="text">
                <h3 class="txt">{{$comic['slug']}}</h3>
            </div>
        </div>

        @endforeach

    </div>

</div>


@endsection

