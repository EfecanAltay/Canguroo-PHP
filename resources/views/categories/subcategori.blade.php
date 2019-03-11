@extends('layouts.canguroo_layout')

<?php
$link = array("name" => $categori->categori_name , "url" => "#" );
$linkArray  = array($link);

    $electronicBg = asset('imgs/electronic_sidebarcontent_background.jpg');
    $homeEvromentBg = asset('imgs/home_evroment_sidebarcontent_background.jpg');
    $clothingBg = asset('imgs/clothes_sidebarcontent_background.jpg');

    
    $homeEvromentLinks =[ ['url' => "asd" , 'name' => "Kitchen" ] ,['url' => "asd" , 'name' => "Living Room" ] ,['url' => "asd" , 'name' => "Bed Room" ] ];
    $clothingBgLinks =[ ['url' => "asd" , 'name' => "Dress" ] ,['url' => "asd" , 'name' => "SweetShirts" ] ,['url' => "asd" , 'name' => "Shoes" ],['url' => "asd" , 'name' => "Socks" ] ];


    $itemsLink  = array();
	foreach ($sub_categories as $sub_categori) {
		$link = array("name" => $sub_categori->subcategori_name , "url" => "url" );
		array_push($itemsLink, $link );
	}
    
    $item = array("name" => $categori->categori_name , "bgImage" => $homeEvromentBg , "links"=>$itemsLink);
?>

@section('sidebar')
    @component('sections.cSidebar.categori_sidebar' , ["item" => $item ])
    @endcomponent
@endsection

@section('carousel')
    @component('sections.carousel')
    @endcomponent
@endsection

@section('content')

@endsection