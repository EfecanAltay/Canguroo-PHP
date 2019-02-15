<div id="collapse1">
  <h1>My Card</h1>
    <div class="list-group">
    @isset($productList)
      @if(is_countable($productList))
        @if(count($productList) > 0)
            @foreach ($productList as $product)
            <form method="POST" >
              {!! csrf_field() !!}
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <button type="submit" class="adress-row list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $product->title }}</h5>
                    <small>{{$loop->index + 1}}</small>
                  </div>
                  <p class="mb-1">{{ $product->desc }}</p>
              </button>
            </form>
          @endforeach
        @else
          <li class="list-group-item list-group-item-danger">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="alert-link">Adress Bulunmuyor</h5>
                <small>0</small>
              </div>
              <p class="mb-1">Siparişleriniz için Adres Eklemeniz Gerekiyor.</p>
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
    @endisset
  </div>
</div>
