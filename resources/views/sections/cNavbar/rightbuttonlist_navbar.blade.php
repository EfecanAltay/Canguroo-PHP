
<?php
	$links =['signin' => "login" , 'signout' => "login" ];
?>
@component('sections.cNavbar.components.userbutton_navbar',['links' => $links])
@endcomponent