<div style=" margin-top:10px; margin-left: 50px;  width: 400px; padding:10px;">
  <h1 style="color:white">{{$product->title}}</h1>
  <h5 style="color:white">{{$product->subtitle}}</h5>
  </br>
  <h3>cost : {{$product->cost}}₺</h3>
  </br>
  <?php
    $onCard = false ;
  ?>
  @if(isset($userData))
    @component('product.productDetailCardList',["userData"=>$userData ,"product"=>$product])
    @endcomponent
  @endif
  </br>
  <form method="POST" action="{{route('takeProduct',['product_id'=>$product->id]) }}" >
  @csrf
    <div class="form-row">
      <div class="form-group">
      <label>Color :</label> 
      <select name="color" id="colorselector">
        <option value="black" data-color="#DC143C" selected="selected">Black</option>
        <option value="red" data-color="#A0522D">Red</option>
        <option value="blue" data-color="#CD5C5C" >Blue</option>
        <option value="orange" data-color="#FF4500">Orange</option>
        <option value="green" data-color="#FF8C00">Green</option>
      </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label>Amount :</label> 
        <input type="number" name="amount" required/>
      </div>
    </div>
  
    @if($onCard)
      <button type="submit" name="take" value="addToCard" class="btn btn-primary">Bunuda Sepete Ekle</button>
      <button type="submit" name="take" value="fastPay" class="btn btn-success">Hemen Al</button>
    @else
      <button type="submit" name="take" value="addToCard" class="btn btn-primary">Sepete Ekle</button>
      <button type="submit" name="take" value="fastPay" class="btn btn-success">Hemen Al</button>
    @endif
      </form>
</div>