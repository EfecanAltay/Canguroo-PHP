 @if(count($card->packages) > 0)
            @foreach ($card->packages as $package)
              	<div class="d-flex w-100 justify-content-between" style="padding:px;">
              		<form method="GET" class="d-flex w-100" action="{{route('getProductDetail' ,['product_id'=>$package->product_id])}}" >
		              	<button type="submit" name="detail" class="adress-row list-group-item list-group-item-action">
		                  <div class="d-flex w-100 justify-content-between">
		                    <h5 class="mb-1">{{ $package->product_title }}</h5>
		                    <small>x{{ $package->amount }} amount</small>
		                  </div>
		                  <h3 style="float:right;" >= {{ $package->pack_cost }}₺</h3>
		                  <p class="mb-1">{{ $package->product_id }}</p>
		              	</button>
	              	</form>
	              	<form method="GET"  class="d-flex" action="{{route('deleteProductOnCard' ,['package_id'=>$package->id])}}" >
		              	<button type="submit" class="btn btn-danger">
		              		<i class="far fa-2x fa-trash-alt"></i>
		              	</button>
	              	</form>
          	  	</div> 
          @endforeach
        @else
          <li class="list-group-item list-group-item-danger">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="alert-link">Product Have Not</h5>
                <small>0</small>
              </div>
              <p class="mb-1">You not choose any product. </p>
          </li>
        @endif