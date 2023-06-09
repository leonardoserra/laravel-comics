<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')


    <main>
        @include('partials.jumbotron')
        @include('partials.card_section')
        @include('partials.banner_bonus')

    </main>
    <footer>

        @include('partials.footer')
        @include('partials.banner_bottom')
    </footer>
        

   
</body>

</html>