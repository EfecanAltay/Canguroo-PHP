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
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">
        <style type="text/css">
          .list-group-item > a{
            color :black;
            text-decoration: none;
          }
          .list-group-item.active > a{
            color :white;
            text-decoration: none;
          }
        </style>
    </head>
    <body style="" >
      <div style="  height: 60px; background-color: black ; color: white;"> Adds</div>
      @component('sections.cNavbar.navbar',['userData' => $userData])
      @endcomponent
      @component('sections.breadcrumb')
      @endcomponent
      <div class="container-fluid" style="padding:20px; background-color: lightgray;">
        <div class="row" style="min-width:1000px;">
          <div  class="col-3" style=" padding: 0px; padding-left: 10px; ">  
            <ul class="list-group">
              @switch($tag)
                @case("card")
                    @component('pay2go.cardPage',['userData'=>$userData ,'card' => $card])
                    @endcomponent
                @break
                @case("payment")
                @break
                @case("success")
                @break
            @endswitch
          </div>
        </div>
      </div>
      @component('sections.footer')
      @endcomponent
    </body>
</html>