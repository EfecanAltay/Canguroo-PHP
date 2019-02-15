<div id="collapse1">
  <form method="GET" action="{{ route('addAdress') }}">
    <button  type="submit" class="btn btn-success"  style="float:right;"><a>Add Adress</a></button>
    <h1>Adress List</h1>
  </form>
    <div class="list-group">
    @isset($adressList)
      @if(count($adressList) > 0)
        @foreach ($adressList as $adress)
        <form method="POST" action="{{ route('getAdress') }}">
          {!! csrf_field() !!}
          <input type="hidden" name="adress_id" value="{{ $adress->id }}">
          <button type="submit" class="adress-row list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$adress->title}}</h5>
                <small>{{$loop->index + 1}}</small>
              </div>
              <p class="mb-1">{{$adress->adress}}</p>
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
    @endisset
  </div>
</div>
