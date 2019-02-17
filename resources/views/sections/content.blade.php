
<div class="row" style="background-color: red; position: relative;">
    @if(isset($products))
    @foreach ($products as $product)
        @component('sections.cCardItem_content' , ["product" => $product ])
        @endcomponent
    @endforeach 
    @endif
</div>
