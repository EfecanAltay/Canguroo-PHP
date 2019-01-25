<?php

$components = "sections.cNavbar.components.";

$link1 =['url' => "url" , 'text' => "Indirime Girenler" ];
$link2 =['url' => "url" , 'text' => "En Çok Alınanlar" ];
$link3 =['url' => "url" , 'text' => "Canguroo Ürünleri" ];
?>
@component($components.'button_navbar' , ['link' => $link1 , 'active' => "true"])
@endcomponent

@component($components.'button_navbar' , ['link' => $link2])
@endcomponent


@component($components.'button_navbar' , ['link' => $link3])
@endcomponent
