<div>
  <h1>My Card</h1>
    <ul class="list-group" >
    @if(isset($card))
      @if(is_countable($card->packages))
       @component("pay2go.cardComponent.packageListRow",["card" => $card ])
       @endcomponent
      @else
         <li class="list-group-item list-group-item-danger">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="alert-link">Product Have Not</h5>
              </div>
              <p class="mb-1">You not choose any product</p>
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
  </ul>
</div>
