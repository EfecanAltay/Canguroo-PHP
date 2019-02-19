<div id="collapse1">
  <h1>My Card</h1>
    <div class="list-group">
    @if(isset($card))
      @if(is_countable($card->packages))
       @component("user.profile.card.productRow",["card" => $card ])
       @endcomponent
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
