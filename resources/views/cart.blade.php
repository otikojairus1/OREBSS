@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="P">
        <p>YOUR CART IS READY!</p>

        <hr>
        @if ($cartContents)
           
            @foreach ($cartContents as $cartContent)
                <p>FOOD ORDERED: {{ $cartContent->foodOrdered }}</p>
                <p>CUSTOMER NAME: {{ $cartContent->username }}</p>
                <p>ORDERED AT: {{ $cartContent->created_at }}</p>
                <p>ORDER UPDATED AT: {{ $cartContent->updated_at}}</p>
                <p>ORDER DESCRIPTION: {{ $cartContent->description}}</p>
                <p>ORDER PRICE: {{ $cartContent->price}}</p>
                
                <br>
                <hr>
            @endforeach
            <p>TOTAL BILL: {{ $bill }}</p>
            <a href="/payment/{{ $cartContent->user_id ?? '' }}" class="btn btn-success">Checkout</a>
            
        @endif
  
    </div>
</div>
    
@endsection