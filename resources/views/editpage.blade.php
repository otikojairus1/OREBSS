@extends('layouts.app')

@section('content')

<div class="container">
    <h2>SELECT THE MENU TO UPDATE ITS INFORMATION</h2>

   
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
    
    
                <a href="/menu/edit/{{$m->id}}" class="btn btn-primary">CLICK TO UPDATE</a>
                </div>
                
                </div>
           
</div>
@endforeach

@endsection