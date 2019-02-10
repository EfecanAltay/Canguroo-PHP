<?php
  $emailHelpMessage = $errors->first('email');
  $password1 = $errors->first('password');
  $err_name = $errors->first('name');
  $err_surname = $errors->first('surname');
  $password2 = $errors->first('password2');
  $registerMessage = $errors->first('registerMessage');
  $navbarPath = 'sections.cNavbar.navbar2';
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Canguroo | {{__('auth.register')}}</title>
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
      @component($navbarPath)
      @endcomponent
      <div class="cLoginPane">
        @if($registerMessage != "")    
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Kayıt Başarısız !</strong><br>{{$registerMessage}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        <div class="cLoginPaneBody">   
          <h1 class="header">{{__('auth.register')}}</h1>
            <form method="POST" action="/register">
              @csrf
              <div class="form-group">
                <label for="ex ampleInputEmail1">{{__('auth.email')}}</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('auth.email')}}" name="email" required>
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
                <label for="ex ampleInputEmail1">{{__('auth.name')}}</label>
                <input type="name" class="form-control" aria-describedby="emailHelp" placeholder="{{__('auth.name')}}" name="name" required>
                @if($err_name != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Mail !</strong><br>{{ $err_name }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
              <div class="form-group">
                <label for="ex ampleInputEmail1">{{__('auth.surname')}}</label>
                <input type="surname" class="form-control" aria-describedby="emailHelp" placeholder="{{__('auth.surname')}}" name="surname" required>
                @if($err_surname != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Mail !</strong><br>{{ $err_surname}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">{{__('auth.pass')}}</label>
                <input type="password" class="form-control" placeholder="{{__('auth.pass')}}" name="password" required>
                @if($password1 != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Şifre!</strong><br>{{ $password1}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">{{__('auth.repass')}}</label>
                <input type="password" class="form-control" placeholder="{{__('auth.repass')}}" name="password_confirmation" required>
                @if($password2 != "")
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hatalı Şifre!</strong><br>{{ $password2}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">{{__('auth.acceptRequirement')}}</label>
              </div>
               <div class="form-row">
                <div class="col">
                  <button type="submit" class="btn btn-success">{{__('auth.register')}}</button>
                </div>
                <div class="col">
                  <a href="/login" class="btn  btn-warning">{{__('auth.iAlreadyAMember')}}</a>
                </div>
              </div>
            </form>
        </div>
      </div>
    </body>
</html>