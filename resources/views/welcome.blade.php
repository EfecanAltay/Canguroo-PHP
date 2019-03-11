
<?php
	if (!isset($userData)){
		$userData = null;
	}
	if (!isset($products)){
		$products = null;
	}
?>
@component('home',['userData' => $userData , "products" => $products])
@endcomponent