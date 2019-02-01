<?php

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

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cCarousel.css') }}" rel="stylesheet">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="script" href="{{ asset('bootstrap/js/bootstrap.js') }}">

    </head>
    <body >
      <div style="width: 100%; height: 60px; background-color: black ; color: white;"> Adds</div>
      @component('sections.cNavbar.navbar')
      @endcomponent
      <div style="width: 100%; margin: 0px; padding: 0px; background-color: lightgray">
        @component('sections.cSidebar.sidebar')
        @endcomponent
        <div style="margin:0px auto; padding:0px; height: 100%; width:100%; background-color: lightgray;">
            @component('sections.cSidebar.sidebarItemContentList')
            @endcomponent
            @component('sections.carousel')
            @endcomponent
            <!--
            @component('sections.breadcrumb')
            @endcomponent
            -->
            <div  class="cContent" style="">
            @component('sections.content')
            @endcomponent
            </div>
        </div>
      </div>
      @component('sections.footer')
      @endcomponent
    </body>
</html>