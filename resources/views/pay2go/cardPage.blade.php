
@component("pay2go.cardComponent.packageList",["card" => $card ])
@endcomponent

<div class="card border-success" style="margin: 20px 0px;text-align: center;">
    <div class="card-body ">
      <p class="card-text" >Total <h1 style="color:green;">{{ $card->total_cost }}₺</h1></p>
    </div>
    <form method="Post" style="width: 100%;" action="{{route('goPayment')}}" >
	 	@csrf
		<button class="btn btn-success btn-block" type="submit">Go Payment</button>	
	</form>
</div>

<!-- Adress secme componenti -->
<!-- Payment Sayfasına gitmek için post data => PaymentController Oluşturulacak -->