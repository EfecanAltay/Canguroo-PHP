<?php
	foreach ($packs as $pack) {
		echo ' <a class="dropdown-item" href="'.route("profile").'">';

		echo $pack->amount." x ";
		echo $pack->product_title;
        $propText = "";
        if($pack->product_props != null)
        {
            $props = $pack->product_props;
            echo " | ";
            foreach ($props as $propName => $prop_value) 
            {
            	$propText = " ".$propName." : ".$prop_value." ";
            }
        }
     	echo $propText.'</a>';   
	}
?>