@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="h2">
            please make an order here
        </div>

                @if (session('fooddetail'))
                    <div class="alert alert-success">
                        {{ session('fooddetail') }} added to cart successfully
                    </div>
                @endif
            <div class="row">
                @foreach($orders as $order)
                <div class="col-md-3 m-3">
                  
            
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/food1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">{{ $order->foodname }}.</p>
                        <p class="card-text">{{ $order->price }}.</p>
                          <p class="card-text">{{ $order->description}}</p>
                        <a href="/addtocart/{{$order->foodId}}" class=" mr-6 btn btn-primary">Add to Cart</a>
                        <a href="/viewcart/{{$loggedUser}}" class="ml-8 btn btn-primary">my Cart</a>
                        </div>
                      </div>
                   
                </div>
                @endforeach
            </div>
       
    </div>
@endsection