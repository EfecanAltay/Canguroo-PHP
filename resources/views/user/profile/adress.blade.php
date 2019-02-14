  
<script type="text/javascript">
    $( document ).ready(function() {
      $('#addAdress').click(function(){
        $('#collapse2').show();
        $('#collapse1').hide();
      });
      $('#cancel').click(function(){
        $('#collapse1').show();
        $('#collapse2').hide();
      });
    });
</script>
<div class="col-9" style="padding:50px;">
<div id="accordionExample" >
  <div id="collapse1">
    <button id="addAdress" type="button" class="btn btn-success"  style="float:right;"><a>Add Adress</a></button>
    <h1>Adress</h1>
    <div class="list-group">
    @isset($adressList)
      @if(count($adressList) > 0)
        @foreach ($adressList as $adress)
          @component('user.profile.adress.adressRow' ,['adress' => $adress ])
          @endcomponent
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
  <div id="collapse2" style="display:none;">
    <button id="cancel" type="button" class="btn btn-danger" style="float:right;"><a>Cancel</a></button>
    <h1>Add Adress</h1>
    @component('user.profile.adress.addAdress')
    @endcomponent
  </div>
</div>