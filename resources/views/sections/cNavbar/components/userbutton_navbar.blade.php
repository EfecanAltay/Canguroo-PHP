<li class="nav-item" style="background-color: red; height:0px; margin-top: -28px;">
	<table class="nav-link">
		<tr>
			<td colspan="2" align="center" ><h5><b>Hesap</b></h5></td>
		</tr>
		<tr style="" height="10" >
			@if(!isset($links['userData']))
			<td align="center" height="10" ><a class="active" href="{{$links['signin']}}" >Giriş</a></td>
			<td align="center" height="10"  ><a class="" href="{{$links['signout']}}" >Kayıt</a></td>
			@else
			<?php
				$userData = $links['userData'];
			?>
			<td align="center" height="10" ><a class="active" href="{{ route('logout') }}" >{{$userData['name']}}</a></td>
			@endif
		</tr>
	</table>
</li>