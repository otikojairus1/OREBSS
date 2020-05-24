@extends('layouts.app')

@section('content')
<div class="container"> 
   
  <h4>CHECK OUT TODAYS'S DISHES</h4>

    @if(session('success'))
    <div class="alert alert-success"><strong>{{session('success')}}</strong> has been added to your cart!!
            
        </div>
    @endif


    <div class="row"> 
    @foreach($MenuList as $m)
                
        <div class="col-md-4 my-3">
            <div class="card text-center">
            {{-- <div class="card-header">
               {{$m->name}}
            </div> --}}
            <div class="card-body">
            <h5 class="card-title">{{$m->name}}</h5>
            <p class="card-text">{{$m->menuDescription}}</p>
            <p class="card-text">EACH AT KES {{$m->price}}</p>
            <p class="card-text">AVAILABLE DISHES : {{$m->quantity}}</p>


            <a href="/menu/{{$m->id}}" class="btn btn-primary">ORDER NOW</a>
            <a href="/mycart/{{Auth::id()}}" class="btn btn-primary">My Cart</a>
           
            </div>
            
            </div>
        </div>
   
    @endforeach
</div> 
     
</div>
@endsection