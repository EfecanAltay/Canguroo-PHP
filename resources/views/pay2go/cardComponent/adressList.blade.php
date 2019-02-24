
<h3>: Adress :</h3>
<select class="d-flex" style="margin: 0px auto;" name="adress">
      @if(count($adressList) > 0)
        @foreach ($adressList as $adress)
          <option data-toggle="list" href="#" class="adress-row list-group-item list-group-item-action" 
          value="{{$adress->id}}" >
             {{$adress->title}}   
          </option>
        @endforeach
      @else
        <option data-toggle="list" href="#" class="adress-row list-group-item list-group-item-action" 
          value="none" >
             <form method="GET" action="{{route('adress')}}"  >
                Adress Bulunmuyor Adress Ekleyin...
             </form>
        </option>
      @endif
</select>

