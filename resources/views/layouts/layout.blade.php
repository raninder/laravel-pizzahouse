<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <!-- content where we want to apply style -->
      @yield('content')
      <footer>
        Copyright 2022 Pizzahouse
          </footer>
    </body>
</html>