<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Canguroo</title>
       
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
       
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cCarousel.css') }}" rel="stylesheet">
      
        <link rel="stylesheet" type="text/css" href="{{ url('css/docs.css')}}" />
        
        <link rel="stylesheet" type="text/css" href="{{ url('css/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-colorselector.min.css') }}">
        <script src="{{ url('js/bootstrap-colorselector.min.js') }}">as</script>

        
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
    <body style="position: relative; padding: 0px; background-color: gray;">
      <div style="height: 60px; background-color: black; color:white;"> Adds</div>
      @component('sections.cNavbar.navbar',['userData' => $userData])
      @endcomponent
      <?php 
        
        $cate_link= array('name' => $categori_name,'url'=>route('getSubCategoriPage' ,$categori_name) );
        $sub_cate_link= array('name' => $sub_categori_name,'url'=>"" );

        $links = array($cate_link,$sub_cate_link);

      ?>
      @component('sections.breadcrumb' ,['links' => $links ] )
      @endcomponent
      <div></div>
      <div class="row">
        <div style="margin: 30px 0px; width: 900px; margin:0px auto;" >
          <div class="row">
          @component('product.components.product_carousel')
          @endcomponent
          @component('product.components.product_detail',["product"=>$product])
          @endcomponent
          </div>
        </div>
        <div class="col-12 col-lg-3"  style="background-color: lightgray; width: 300px; padding: 50px;">
          <img style="width: 100px;height: 100px; background-color: white; float:left;"></img>
          <div style="float:left; padding-left: 10px;">
              <h3>Store Name</h3> 
              <h5>Store Desc.</h5>
                <form method="GET" action="{{route('getStore',['store_id'=> $product->store_id])}}">
                  <input class="btn btn-info" type="submit" value="go store" />  
                </form>
          </div>
        </div>
      </div>
      
      @component('sections.footer')
      @endcomponent
    </body>
</html>