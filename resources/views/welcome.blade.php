
<?php
	if (!isset($userData)){
		$userData = null;
	}
	if (!isset($products)){
		$products = null;
	}
?>
@component('layouts.cangoroo_layout',['userData' => $userData , "products" => $products])
@endcomponent