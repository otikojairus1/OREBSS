@extends('layouts.app')

@section('content')
<H3 class="heading m-auto text-center">YOU ARE ABOUT TO ORDER THESE FOOD</H3>
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

<div class="container text-center heading">GRAND TOTAL : {{$cartDetail->price += $cartDetail->price}}</div>

@endsection