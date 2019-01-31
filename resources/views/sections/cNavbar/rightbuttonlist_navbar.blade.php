
<?php
	$links =['signin' => "login" , 'signout' => "register" ];
?>
@component('sections.cNavbar.components.userbutton_navbar',['links' => $links])
@endcomponent