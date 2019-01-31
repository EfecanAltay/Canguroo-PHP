<?php
  $emailHelpMessage = $errors->first('email');
  $passwordHelpMessage = $errors->first('password');
  $loginMessage = $errors->first('loginMessage');
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
        <script src="semantic/out/semantic.min.js"></script>
       <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">
        <link href="{{ asset('css/login_page.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: #e1e2e1">
      <?php
        $navbarPath = 'sections.cNavbar.';
      ?>
      <nav class="navbar navbar-expand cNavbar" style="width: 100%; height:70px;" >
        <a class="navbar-brand cNavbarItem" href="/">
          <h1 >
          Canguroo.com
          </h1>
        </a>
        <div class="collapse navbar-collapse" >
          <ul class="navbar-nav navbar-collapse">
              <li class="nav-item navbar-collapse">
                Hayalindeki ürünün en uygun fiyatını seçmeye adım at
             </li>
          </ul>
          <ul class="navbar-nav navbar-right">
         
          </ul>
        </div>
      </nav>
      <div class="cLoginPane">
        @if($loginMessage != "")    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Giriş Başarısız !</strong><br>{{$loginMessage}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        <div class="cLoginPaneBody">   
          <h1 class="header">Giriş Yap</h1>
            <form method="POST" action="/login">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email Adres</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" required>
                @if($emailHelpMessage != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Mail !</strong><br>{{ $emailHelpMessage}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Şifre</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre" name="password" required>
                @if($passwordHelpMessage != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Şifre!</strong><br>{{ $passwordHelpMessage}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <small class="form-text"><a href="/forgetPassword"> Şifremi Unuttum</a></small>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
              </div>
               <div class="form-row">
                <div class="col">
                  <button type="submit" class="btn btn-success">Giriş Yap</button>
                </div>
                <div class="col">
                  <a href="/register" class="btn  btn-warning">Üye Olmak İstiyorum</a>
                </div>
              </div>
            </form>
        </div>
      </div>
    </body>
</html>