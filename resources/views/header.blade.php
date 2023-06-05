
<header class="d-flex align-center">
    <div class="container d-flex align-center justify-between">
        <div class="logo d-flex align-center">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="d-flex">
                <li class="active" >
                    <a href="{{Route('home')}}">home</a>
                </li>
                <li>
                    <a href="{{Route('cards')}}">cards</a>
                </li>
                <li>
                    <a href="#">link</a>
                </li>
                <li>
                    <a href="#">link</a>
                </li>
            </ul>
        </nav>
        <input type="text">
    </div>
</header>

