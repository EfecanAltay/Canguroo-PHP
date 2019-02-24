<div id="collapse1">
  <h1>CargoPack List</h1>
  <div class="list-group">
      @if(count($cargoPacks) > 0)
        @foreach ($cargoPacks as $cargoPack)
          @component('user.profile.order.orderRow',["cargoPack" => $cargoPack])
          @endcomponent
        @endforeach
      @else
        <li class="list-group-item list-group-item-danger">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="alert-link">Siparişteki bir Paketiniz Yok</h5>
              <small>0</small>
            </div>
            <p class="mb-1">Siparişleriniz için Ürünlerimize Göz Atabilirsiniz.</p>
        </li>
      @endif
  </div>
</div>
