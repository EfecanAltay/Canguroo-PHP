<form method="Get" action="{{ route('getOrderDetail',['order_id'=> $cargoPack->id]) }}">
          <button type="submit" class="adress-row list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$cargoPack->id}}</h5>
                <small>{{$cargoPack->status}}</small>
              </div>
              <p class="mb-1">{{$cargoPack->adress}}</p>
          </button>
</form>