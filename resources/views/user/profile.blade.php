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

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cCarousel.css') }}" rel="stylesheet">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">
    </head>
    <body style="" >
      <div style="  height: 60px; background-color: black ; color: white;"> Adds</div>
      @component('sections.cNavbar.navbar')
      @endcomponent
      @component('sections.breadcrumb')
      @endcomponent
      <div class="container-fluid" style="padding:20px; background-color: lightgray;">
        <div class="row" style="min-width:1000px;">
          <div  class="col-3" style=" padding: 0px; padding-left: 10px; ">  
            <ul class="list-group">
              <li class="list-group-item"><a href="#">Sepetim</a></li>
              <li class="list-group-item"><a href="#">Kuponlarım</a></li>
              <li class="list-group-item"><a href="#">Siparişlerim</a></li>
              <li class="list-group-item active">Setting</li>
            </ul>
          </div>
          <div class="col-9" style="padding:50px;">  
              @component('user.info')
              @endcomponent
          </div>
        </div>
      </div>
      @component('sections.footer')
      @endcomponent
    </body>
</html>