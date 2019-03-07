

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
  	<?php
  	$link = array('name' => 'Home' ,'url' => '/url' );
  	$link1 = array('name' => 'Home' ,'url' => '/url' );
  	$link2 = array('name' => 'Home' ,'url' => '/url' );
  	if(isset($pages)){
	  	
	  	foreach ($pages as $key) {
	  		echo '<li class="breadcrumb-item"><a href="'.$key['url'].'">'.$key['name'].'</a></li>';
	  	}
  	}
  	?>
  </ol>
</div>