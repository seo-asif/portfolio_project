<!DOCTYPE html>
<html lang="en">

{{-- @include('layout.header') --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    @yield('title')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <!------------ CSS Stylesheet link ---------------->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
    <!------------ End CSS Stylesheet link ---------------->
</head>

<body>
<div>
    @include('layout.navigationbar')
</div>
<div>

    @yield('content')
</div>





    @include('layout.footer')

    <!-------------------- Bootstrap Js -------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-------------------- End Bootstrap Js ---------------->

</body>

</html>
