@extends('layouts.app')

@section('content')
{{-- @if(session('cartDetails') === null) --}}
{{-- <H3 class="heading m-auto text-center">YOU HAVE NOTHING IN YOUR CART</H3> --}}
{{-- @endif
@if(session('cartDetails')) --}}


<H3 class="heading m-auto text-center">MY CART</H3>
{{-- @endif --}}

{{-- @if(session('cartDetails')) --}}
@foreach($cartDetails as $cartDetail)


    
    <div class="list-group row my-4">
    
        <div class="list-group-item col-md-3 m-auto">
            <div class="lead">FOOD ORDER CARD</div><HR>
            FOOD NAME:<br> {{$cartDetail->name}}><hr>
            DESCRIPTION:<br> {{$cartDetail->menuDescription}}<hr>
            PRICE:<br> {{$cartDetail->price}}<hr>
            DISHES:<br> {{$cartDetail->quantity}}<hr>

            TOTAL : {{ $cartDetail->price * $cartDetail->quantity }}
        </div>
    </div>

@endforeach







{{-- @endif --}}
@endsection