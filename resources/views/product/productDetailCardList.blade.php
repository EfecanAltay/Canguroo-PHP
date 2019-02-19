<ul class="list-group">
<?php
if(isset($userData) && $userData !== null)
        if($userData->card() !== null){
          $card = $userData->card()->get();
          if($card->packages() !== null){
            $packs = $card->packages()->where("product_id","=",$product->id);
            foreach ($packs as $pack) {
            	echo '<li class="list-group-item d-flex justify-content-between align-items-center list-group-item-warning">';
               	$onCard = true ;
               	$propText = "";
               	if($pack->product_props != null)
               	{
                	$props = $pack->product_props;
                	foreach ($props as $propName => $prop_value) 
                	{
                		$propText = "".$propName." : ".$prop_value." ";
                	}
               	}
               echo "!!! You've got for ".$propText;
          	   echo '<span class="badge badge-primary badge-pill">x '.$pack->amount.' Amount</span>';
               echo '
                    <form method="GET"  class="d-flex" action="'.route('deleteProductOnCard' ,['package_id'=>$pack->id]).'"  style="padding:10px;" >
                        <button type="submit" class="btn btn-danger">
                            <i class="far  fa-trash-alt"></i>
                        </button>
                    </form>';
                echo '</div>';

               echo "</li>";
            }
          }
        }
?>
</ul>
