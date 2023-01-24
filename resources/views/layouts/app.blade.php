<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Masak Apa - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container p-3 bg-white border-bottom shadow-sm mb-3">
        <div class="row">
            <div class="col-lg-2 p-3 text-center">
                <a class="text-dark text-decoration-none" href="{{ route('admin.home.index') }}"><h3 class="my-0 mr-md-auto font-weight-normal">Masak Apa?</h3></a>
            </div>
            <div class="col-lg-3 p-0 mb-0"></div>
            <div class="col-lg-7 p-3 text-center">
                <nav class="my-2 my-md-0 mr-md-3"">
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('admin.home.index') }}">Home</a>
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('ingredients.index') }}">Ingredients</a>
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('categories.index') }}">Categories</a>
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('recipes.index') }}">Recipes</a>
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('origins.index') }}">Origins</a>
                    <a class="p-2 text-dark text-decoration-none" href="{{ route('units.index') }}">Units</a>
                    <a class="p-2 text-dark text-decoration-none" href="#">Users</a>
                    <a class="p-2 text-dark text-decoration-none" href="#">Logout</a>
                </nav>
            </div>
        </div>
    </div>


    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>

</body>
</html>
