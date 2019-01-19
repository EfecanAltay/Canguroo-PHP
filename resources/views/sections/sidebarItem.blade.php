
<a href="#" class="list-group-item sidebarItem" content-data-id="sidebarElement1" > {{ $sidebarTitle }}
    <div class="sidebarContent col-sm-12 col-md-8 col-lg-8" style="position: absolute; padding: 0px;">
        <div class="sidebarContentBody" style="background-color: black; padding: 0px;" >
        	<img src="{{ $backgroundImage }}"  style="position: absolute;width:100%;height:100%; z-index: 1; opacity: 0.5; object-fit: cover;" />
        	<div style="position: absolute; z-index: 2;  padding:20px; width: 100%; height: 100%">
	        	<h1 class="sidebarContentHeader font-weight-bold" style="z-index: 2;"><b>{{ $sidebarTitle }}</b></h1>
	        	<ul class="sidebarContentList">
	        	<?php
	        	//$links = array();
	        	?>
	        		@if(isset($links))
		        		@foreach ($links as $link)
		        			<?php
 							$url = $link['url'];
		        			?>
						    <li class="sidebarContentListItem"  onclick='location.href="{{ $url }}";'  >
						    	{{ $link['name'] }}
						    </li>
						@endforeach
					@endif
	        	</ul>
        	</div>
        </div>
    </div>  
 </a>
