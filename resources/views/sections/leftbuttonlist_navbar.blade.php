<?php
$link1 =['url' => "url" , 'text' => "Indirime Girenler" ];
$link2 =['url' => "url" , 'text' => "En Çok Alınanlar" ];
$link3 =['url' => "url" , 'text' => "Canguroo Ürünleri" ];
?>
@component('sections.button_navbar' , ['link' => $link1 , 'active' => "true"])
@endcomponent

@component('sections.button_navbar' , ['link' => $link2])
@endcomponent


@component('sections.button_navbar' , ['link' => $link3])
@endcomponent
