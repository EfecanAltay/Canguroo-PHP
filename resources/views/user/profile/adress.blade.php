  <?php
  
?>
<div class="col-9" style="padding:50px;">
<div id="accordionExample" >
  @switch($adressTag)
    @case('getAdresses')
      @component('user.profile.adress.adressList' , ["adressList" => $adressList])
      @endcomponent
    @break
    @case('addAdresses')
      @component('user.profile.adress.addAdress')
      @endcomponent
    @break
    @case('updateAdresses')
      @component('user.profile.adress.updateAdress' ,['adress' => $adressList])
      @endcomponent
    @break
    @default
      @component('user.profile.adress.adressList' , ["adressList" => $adressList])
      @endcomponent
    @break
  @endswitch
</div>
</div>