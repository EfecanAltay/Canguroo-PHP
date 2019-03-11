@extends('layouts.canguroo_layout')


@section('sidebar')
    @component('sections.cSidebar.home_sidebar')
    @endcomponent
@endsection

@section('carousel')
    @component('sections.carousel')
    @endcomponent
@endsection

@section('content')
    @component('sections.content',["products" => $products])
    @endcomponent
@endsection

