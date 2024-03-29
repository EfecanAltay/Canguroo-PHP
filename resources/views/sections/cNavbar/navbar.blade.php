<?php
  $navbarPath = 'sections.cNavbar.';
  if(!isset($userData)){
    $userData = null;
  }
?>
<nav class="navbar navbar-expand cNavbar" style="width: 100%; height:140px;">
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="{{url('imgs/canguroo_logo_v1.png')}}" width="260" style="background-color: transparent;margin-bottom:20px;"></img>
  </a>
  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav navbar-collapse">
        @component( $navbarPath.'leftbuttonlist_navbar')
        @endcomponent
        <li class="nav-item navbar-collapse">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Ürün Ara" aria-label="Ürün Ara" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Ara</button>
            </div>
          </div>
       </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      @component( $navbarPath.'rightbuttonlist_navbar' , ['userData' => $userData])
      @endcomponent
    </ul>
  </div>
</nav>
<nav  id="navbar" class="navbar navbar-expand flex-column flex-md-row cNavbar" style=" display: none ; position:fixed; top:0px; width: 100%; z-index: 999999999;" >
  <a class="navbar-brand" href="{{route('home')}}" style="padding:0px;margin: 0px;">
    <img src="{{url('imgs/canguroo_logo_v1.png')}}" width="260" style="background-color:red; margin:0px;"></img>
  </a>
  <button class="navbar-toggler" type="button" data-  toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav navbar-collapse">
        @component($navbarPath.'leftbuttonlist_navbar')
        @endcomponent
        <li class="nav-item navbar-collapse">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ürün Ara" aria-label="Ürün Ara" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Ara</button>
            </div>
          </div>
       </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      @component($navbarPath.'rightbuttonlist_navbar' , ['userData' => $userData])
      @endcomponent
    </ul>
  </div>
</nav>