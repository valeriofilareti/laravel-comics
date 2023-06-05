

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>



<body>

    @include('header')
    @include('jumbotron')
    <main>
        <h1>main1</h1>
        <div class="container">
            @yield('home')
        </div>
    </main>
    @include('footer')

    @vite('resources/js/app.js')
</body>
</html>
