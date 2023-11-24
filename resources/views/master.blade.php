<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My portfolio</title>

    <!------------ Bootsrap CSS ----------------------->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}">
    <!------------ End Bootsrap CSS -------------------->

    <!------------ CSS Stylesheet link ---------------->
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <!------------ End CSS Stylesheet link ---------------->
</head>

<body>
    <div class="container">

        @include('layout.navigationbar')

        @yield('content')

        @include('layout.footer')

    </div>


    <!-------------------- Bootstrap Js -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-------------------- End Bootstrap Js ---------------->

</body>

</html>
