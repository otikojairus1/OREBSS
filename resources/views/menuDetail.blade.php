@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PLACE YOUR ORDER WITH ONE CLICK</div>
{{-- 
                @if($status ?? "")

                    <div class="alert alert-success">Menu added successfully!!!</div>

                @endif --}}

                <div class="card-body">
                    <form method="POST" action="/addtocart">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">NAME</label>

                            <div class="col-md-6">
                                <input id="name" type="text" disabled class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $foodDetail->name }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">DESCRIPTION</label>

                            <div class="col-md-6">
                                <input id="menuDescription" type="text" disabled class="form-control @error('menuDescription') is-invalid @enderror" name="menuDescription" value="{{ $foodDetail->menuDescription }}"  autocomplete="email">

                                @error('menuDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">PRICE PER DISH</label>

                            <div class="col-md-6">
                                <input id="price" type="number" disabled class="form-control @error('price') is-invalid @enderror" value="{{ $foodDetail->price }}" name="price"  autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">QUANTITY (NO. OF DISHES)</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    ADD TO CART
                                </button>
                            </div>

                            <div class="col-md-6 ">
                                <a href="/menu" class="btn btn-primary">
                                    BACK TO MENU
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

@endsection