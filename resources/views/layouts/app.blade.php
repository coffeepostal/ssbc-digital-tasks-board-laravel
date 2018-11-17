<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'SSBC Digital Task Board')}}</title>

    <link rel="stylesheet" href="css/app.css">

</head>
<body>

    @yield('content')

    <script src="js/app.js" type="text/javascript"></script>
</body>
</html>
