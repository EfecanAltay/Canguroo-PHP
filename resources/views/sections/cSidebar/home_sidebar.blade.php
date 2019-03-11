<?php
    $electronicBg = asset('imgs/electronic_sidebarcontent_background.jpg');
    $homeEvromentBg = asset('imgs/home_evroment_sidebarcontent_background.jpg');
    $clothingBg = asset('imgs/clothes_sidebarcontent_background.jpg');

    $elektronikLinks =[ ['url' => "asd" , 'name' => "Smart Phones" ] ,['url' => "asd" , 'name' => "Computers" ] ,['url' => "asd" , 'name' => "Tv's" ] ];
    $homeEvromentLinks =[ ['url' => "asd" , 'name' => "Kitchen" ] ,['url' => "asd" , 'name' => "Living Room" ] ,['url' => "asd" , 'name' => "Bed Room" ] ];
    $clothingBgLinks =[ ['url' => "asd" , 'name' => "Dress" ] ,['url' => "asd" , 'name' => "SweetShirts" ] ,['url' => "asd" , 'name' => "Shoes" ],['url' => "asd" , 'name' => "Socks" ] ];

    $item1 = array("name" => "Electronic" , "bgImage" => $electronicBg , "links"=> $elektronikLinks);
    $item2 = array("name" => "Home Evroment" , "bgImage" => $homeEvromentBg , "links"=> $homeEvromentLinks);
    $item3 = array("name" => "Clouthing & Shoes" , "bgImage" => $clothingBg , "links"=> $clothingBgLinks);

    $items  = array($item1,$item2,$item3);
?>
@extends('sections.cSidebar.sidebar_layout' , ["items" => $items])