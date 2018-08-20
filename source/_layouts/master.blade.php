<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
        <script src="/assets/js/main.js"></script>
    </head>
    <body>

        @component('unique.navigation', ['page' => $page])
        @endcomponent

        @yield('body')

    </body>
</html>
