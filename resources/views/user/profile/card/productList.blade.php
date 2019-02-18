<div id="collapse1">
  <h1>My Card</h1>
    <div class="list-group">
    @if(isset($card))
      @if(is_countable($card->packages))
        @if(count($card->packages) > 0)
            @foreach ($card->packages as $package)
            <form method="POST" >
              {!! csrf_field() !!}
              <input type="hidden" name="product_id" value="{{ $package->id }}">
              <button type="submit" class="adress-row list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $package->product_title }}</h5>
                    <small>x{{ $package->amount }} amount</small>
                  </div>
                  <h3 style="float:right;" >= {{ $package->pack_cost }}₺</h3>
                  <p class="mb-1">{{ $package->product_id }}</p>
              </button>
            </form>
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
      @else
         <li class="list-group-item list-group-item-danger">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="alert-link">Product Have Not</h5>
              </div>
              <p class="mb-1">You not choose any product</p>
          </li>
      @endif
    <h3> = Total {{ $card->total_cost }}₺</h3>
    @else
          <li class="list-group-item list-group-item-danger">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="alert-link">Product Have Not</h5>
              </div>
              <p class="mb-1">You not choose any product</p>
          </li>
    @endif
  </div>
</div>
