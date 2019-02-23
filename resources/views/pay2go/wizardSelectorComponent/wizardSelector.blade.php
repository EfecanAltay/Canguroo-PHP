@switch($tag)
	@case("card")
		<div class="wizard">
		    <ul class="wizardList">
		        <li class="active"><a href="{{route('goCard')}}">Card</a></li>
		        <li >Payment</li>
		        <li>Completed</li>
		    </ul>
		</div>
	@break
	@case("payment")
		<div class="wizard">
		    <ul class="wizardList">
		        <li><a href="{{route('goCard')}}">Card</a></li>
		        <li class="active">Payment</li>
		        <li>Completed</li>
		    </ul>
		</div>
	@break
	@case("success")
		<div class="wizard">
		    <ul class="wizardList">
		        <li>Card</li>
		        <li>Payment</li>
		        <li class="active">Completed</li>
		    </ul>
		</div>
	@break
	@default
		<div class="wizard">
		    <ul class="wizardList">
		        <li class="active"><a href="{{route('goCard')}}">Card</a></li>
		        <li>Payment</li>
		        <li>Completed</li>
		    </ul>
		</div>
	@break
@endswitch