@extends('layouts.app')

@section('content')
<div class="container"> 
    <H3>THESE ARE OUR DISHES TODAY FOR OUR ESTEEM CUSTOMERS</H3>
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
            </div>
            
            </div>
        </div>
   
    @endforeach
</div> 
     
</div>
@endsection