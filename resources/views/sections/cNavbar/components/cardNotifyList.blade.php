
<?php
    if($packs !== null)
	foreach ($packs as $pack) {
        echo '<div class="d-flex w-100" >';
		echo ' <a class="dropdown-item" style="padding:10px;" href="'.route("goCard").'">';

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
        echo '
            <form method="GET"  class="d-flex" action="'.route('deleteProductOnCard' ,['package_id'=>$pack->id]).'"  style="padding:10px;" >
                <button type="submit" class="btn btn-danger">
                    <i class="far  fa-trash-alt"></i>
                </button>
            </form>';
        echo '</div>';
	}
?>
@if($packs !== null)
    @if(count($packs) == 0)
        <div class="alert alert-warning" role="alert">
        !! You've not product in your card
    </div>
    @else
    <form method="GET" action="{{route('goCard')}}">
        <button type= class="btn btn-success d-flex" Align="center" style="margin: 0px 10px;">Go Card</button>
    </form>
    @endif
@else
    <div class="alert alert-warning" role="alert">
        !! You've not product in your card
    </div>
@endif