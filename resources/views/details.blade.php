@extends('layout.main')

@section('details')

<div class="d-flex">

    <div class="details-img">
        <img src="{{$comic['thumb']}}" alt="">
    </div>

    <div class="details-txt">
        <h1>testo</h1>
    </div>

</div>

@endsection
