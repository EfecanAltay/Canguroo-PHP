
<?php
	if (!isset($userData)){
		$userData = null;
	}

?>
@component('layouts.cangoroo_layout',['userData' => $userData ])
@endcomponent