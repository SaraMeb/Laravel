<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">




    </head>
    <body>
      <header>
        <div class="div-image">
          <img src="../../logo.png" width="auto" height="100%">
        </div>
         @include('./layouts.aside')
      </header>
        <main>

            @yield('content')
        </main>

    </body>
    <script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
</html>
