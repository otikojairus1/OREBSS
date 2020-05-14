@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active font-weight-bold">
        PROFILE DETAILS
        </button>
        <button type="button" class="list-group-item list-group-item-action"> NAME: {{$loggedUser->name}}</button>
        <button type="button" class="list-group-item list-group-item-action">EMAIL ADRESS: {{$loggedUser->email}}</button>
        <button type="button" class="list-group-item list-group-item-action">PAYMENT MODE: MPESA</button>
        <button type="button" class="list-group-item list-group-item-action">PLAN: BASIC</button>
        <button type="button" class="list-group-item list-group-item-action">ACCOUNT BALANCE: KES NULL</button>
      </div>
    </div>
    <div class="col-md-9">
      <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active font-weight-bold">
          GET STARTED
        </button>
        
        <div class="row mt-2">
          <div class="col-md-6">
            <div class="card text-center">
              <div class="card-header">
                MAKE AN ORDER
              </div>
              <div class="card-body">
                <h5 class="card-title">Check Out Our Menu</h5>
                <p class="card-text">Be the first to make an order on our todays menu</p>
                <a href="/menu" class="btn btn-primary">ORDER NOW</a>
              </div>
            
            </div>

          </div>

          
          <div class="col-md-6">
            <div class="card text-center">
              <div class="card-header">
                PAYMENT ACCOUNT
              </div>
              <div class="card-body">
                <h5 class="card-title">Manage your account</h5>
                <p class="card-text">You can easily manage your account here, make deposits, payments and check out your balances</p>
                <a href="#" class="btn btn-primary">SEE PAYMENTS</a>
              </div>
            
            </div>
          </div>
      </div>
      
      <div class="row mt-2">
        <div class="col-md-6">
          <div class="card text-center">
            <div class="card-header">
             GENERATE YOUR E-RECEIPT
            </div>
            <div class="card-body">
              <h5 class="card-title">Its very easy to generate your payment receipt</h5>
              <p class="card-text">Our systems are able to generate a receipt whenever you need it instancely.
        
              </p>
              <a href="#" class="btn btn-primary">Generate Receipt</a>
            </div>
            
          </div>

        </div>
        
        <div class="col-md-6">
          <div class="card text-center">
            <div class="card-header">
              MANAGE SUBSCRIPTIONS
            </div>
            <div class="card-body">
              <h5 class="card-title">Manage your Plans here</h5>
              <p class="card-text"> Make subscriptions based on special menus available</p>
              <a href="#" class="btn btn-info">SUBSCRIBE</a>
            </div>
        
          </div>
        </div>

        
        <div class="col-md-12 my-3">
          <div class="card text-center">
            
            <div class="card-body">
              <h5 class="card-title">UPDATE CLIENT'S MENU</h5>
              <p class="card-text">CAUTION: Adding dishes to the menu list will be shifted to LIVEMODE. 
                This means that customers are seeing the dishes and can start making orders immediately,
                for customer convinience please make sure that the food you add is confirmed by the head cook and exists 
                in the kitchen.
              </p>
              <a href="/menu/create" class="btn btn-primary">ADD FOOD</a>
              <a href="/menuedit" class="btn btn-primary">EDIT MENU</a>
              <a href="/menu/delete" class="btn btn-primary">DELETE MENU</a>
            
            </div>
          
          </div>

        </div>
    </div>
    </div>
  </div>
</div>

@endsection
