
<?php 
 $_active= "";
?>
@isset($active)
	@if($active)
	<?php
		$_active = "active" ;
	?>
	@endif
@endisset
<li class="nav-item {{ $_active }}">
    <a class="nav-link active" href="{{$link['url']}}" >{{$link['text']}}</a>
</li>