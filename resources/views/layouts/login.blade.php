<!--
  Sidebarda foreach hatası var çözülecek...
-->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cangoroo</title>
        <link rel="stylesheet" type="text/css" href="semantic/out/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
        <script src="semantic/out/semantic.min.js"></script>

        <link href="{{ asset('css/login_page.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cCarousel.css') }}" rel="stylesheet">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">

    </head>
    <body>
      <div class="cLoginPane">
        <h1 class="header">Giriş Yap</h1>
        <form>
          <ul>
            <li>
             <input type="text" name="username" placeholder="kullanıcı Adı">   
            </li>
            <li>
              <input type="text" name="password" placeholder="şifre">
            </li>
            <li>
              <input type="submit" name="">  
            </li>
          </ul>
        </form>
      </div>
    </body>
</html>