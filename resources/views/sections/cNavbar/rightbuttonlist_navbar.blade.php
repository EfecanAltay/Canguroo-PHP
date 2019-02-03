
<?php
	$links =['signin' => "login" , 'signout' => "register" , "userData" => $userData ];
?>
@component('sections.cNavbar.components.userbutton_navbar',['links' => $links])
@endcomponent