@extends('layout.main')

@section('cards')
<h1>CARDS</h1>
<div class="container cards d-flex">
    <div class="myCard">
        <div class="image">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        </div>
        <div class="text">
            <h3>serie</h3>
        </div>
    </div>
    <div class="myCard">
        <div class="image">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        </div>
        <div class="text">
            <h3>serie</h3>
        </div>
    </div>
    <div class="myCard">
        <div class="image">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        </div>
        <div class="text">
            <h3>serie</h3>
        </div>
    </div>
    <div class="myCard">
        <div class="image">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        </div>
        <div class="text">
            <h3>serie</h3>
        </div>
    </div>
</div>
@endsection

