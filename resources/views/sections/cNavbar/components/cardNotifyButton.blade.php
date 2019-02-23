<li class="nav-item" style="background-color: red; height:0px; margin-top: -14px;">
	<table class="nav-link" >
		<tr style="" align="center" >
			<td align="center" class="dropdown cardNotifyButton" >
				@if(!isset($links['userData']))
					<span class="iconButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-cart-arrow-down fa-2x huge" style="color:white;"></i>
						<span class="badge badge-pill badge-primary">0</span>
					</span>
					<div class="dropdown-menu dropdown-menu-right">
					    <a class="dropdown-item" href="{{route('login')}}" style="background-color: green;" >
					    Sepet için giriş Yapmanız Gerekir</a>
					    <a class="dropdown-item" href="{{route('login')}}" style="background-color: yellow;" >
					    Eğer Kaydınız yoksa buradan kayıt olun</a>
				 	</div>
			 	@else
			 	<?php
					$userData = $links['userData'];
					$packCount = 0;
					$packs = null;
					if(isset($userData) && $userData !== null)
				        if($userData->card() !== null){
				          $card = $userData->card()->get();
				          	if($card !== null && $card->packages() !== null){
				            	$packs = $card->packages()->all();
				            	$packCount = count($packs);
				          	}
				        }
				?>
					<span class="iconButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-cart-arrow-down fa-2x huge" style="color:white;"></i>
						<span class="badge badge-pill badge-primary">{{$packCount}}</span>
					</span>
					<div class="dropdown-menu dropdown-menu-right">
					@component("sections.cNavbar.components.cardNotifyList",["packs" => $packs])
					@endcomponent
				 	</div>
			 	@endif
			</td>
		</tr>
	</table>
</li>