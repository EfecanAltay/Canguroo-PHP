<?php
  $emailHelpMessage = $errors->first('email');
  $passwordHelpMessage = $errors->first('password');
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Canguroo</title>
        <link rel="stylesheet" type="text/css" href="semantic/out/semantic.min.css">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
          <script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
          </script>
        <script src="semantic/out/semantic.min.js"></script>

        <link href="{{ asset('css/login_page.css') }}" rel="stylesheet">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">
    </head>
    <body>
      <div class="cLoginPane">
        <h1 class="header">Giriş Yap</h1>
        <form method="POST" action="/login">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
             <small id="helpMessage" class="form-text">{{ $emailHelpMessage}}</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" name="password">
             <small id="helpMessage" class="form-text">{{ $passwordHelpMessage}}</small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
          </div>
          <button type="submit" class="btn btn-primary">Giriş</button>
        </form>
        {{ $errors->first('loginMessage') }}
      </div>
    </body>
</html>