<h1>
	 Payment
</h1>

<form method="Post" style="width: 100%;" action="{{route('goPaymentSuccess')}}" >
	 	@csrf
		<button class="btn btn-success btn-block" type="submit">Pay</button>	
</form>