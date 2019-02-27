<style type="text/css">
  .carousel-indicators > li{
    width: 200px;
  }
  .carousel-indicators.product >li>img:hover{
    border:2px solid black;
  }
  .carousel-indicators.product >li.active>img{
    border:2px solid red;
  }
</style>

<div style="width: 400px; margin:10px; margin-bottom:140px;">
  <div id="carouselExampleIndicators" class="carousel slide product_carousel" data-ride="carousel" 
      style="height:300px; width: 400px; margin: 0px; margin-left:30px; background-color: red; " >
    <ol class="carousel-indicators product" style="bottom:-60px;">
      <li data-target="#carouselExampleIndicators" style="width: 200px;" data-slide-to="0" class="active">
         <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100 carousel-indicators-item" alt="...">
      </li>
      <li data-target="#carouselExampleIndicators" style="width: 200px;" data-slide-to="1">
        <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100 carousel-indicators-item" alt="...">
      </li>
      <li data-target="#carouselExampleIndicators" style="width: 200px;" data-slide-to="2">
        <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100 carousel-indicators-item" alt="...">
      </li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100" alt="item image">
      </div>
      <div class="carousel-item">
        <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{url('imgs/items/item.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>