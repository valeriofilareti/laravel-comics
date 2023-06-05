@php
    $menu_nav = config('menus')
@endphp
<header class="d-flex align-center">
    <div class="container d-flex align-center justify-between">
        <div class="logo d-flex align-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="d-flex">
                @foreach ($menu_nav as $item)
                <li class="active" >
                    <a href="#">{{$item['name']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
        <input type="text">
    </div>
</header>

