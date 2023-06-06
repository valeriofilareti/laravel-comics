@extends('layout.main')

@section('details')

<div class="details-wrap d-flex">

    <div class="details-img">
        <img src="{{$comic['thumb']}}" alt="">
    </div>

    <div class="details-txt">
        <h1 class="text-center my-5">{{$comic['title']}}</h1>
        <h3>Description</h3>
        <p>{{$comic['description']}}</p>
        <h3>Price</h3>
        <h2>{{$comic['price']}}</h2>
    </div>

</div>

@endsection
