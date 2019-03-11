

<style type="text/css">
.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  padding-left: 0.5rem;
  color: #636c72;
  content: ">";
}
</style>
<div aria-label="breadcrumb" style="padding: 0px; opacity: 0px;  background-color: #D0CFCF;" >
  <ol class="breadcrumb" style=" background-color: transparent; margin:0px;">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
  	<?php
  	if(isset($links)){
	  	foreach ($links as $link) {
	  		echo '<li class="breadcrumb-item"><a href="'.$link['url'].'">'.$link['name'].'</a></li>';
	  	}
  	}
  	?>
  </ol>
</div>