
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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body >
      <div style="width: 100%; height: 60px; background-color: black ; color: white;"> Adds</div>
      @component('sections.navbar')
      @endcomponent
      <div class="row" style="padding: 0px;">
      @component('sections.sidebar')
      @endcomponent
        <div class="col-md-9 col-lg-9 flex" style="top:20px; margin:0px; background-color: #D0CFCF">
          @component('sections.sidebarItemContentList')
          @endcomponent
          @component('sections.breadcrumb')
          @endcomponent
          <div  id="content" style="padding: 10px; margin-top: 10px; font-size:30px">
          @component('sections.content')
          @endcomponent
          </div>
        </div>
      </div>
      @component('sections.footer')
      @endcomponent
    </body>
</html>