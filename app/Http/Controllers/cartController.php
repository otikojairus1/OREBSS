<?php

namespace App\Http\Controllers;
use App\menu;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller


{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cartDetail = Cart::where('cartOwner', $id)->get();
        return view('cartopen')->with('cartDetails', $cartDetail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addtocart($id)
    {
        $foodOnMenu = menu::findorFail($id);

        $foodInCart = new Cart();

        //$foodInCart->id = $foodOnMenu->id;
        $foodInCart->name = $foodOnMenu->name;
        $foodInCart->menuDescription = $foodOnMenu->menuDescription;
        $foodInCart->price = $foodOnMenu->price;
        $foodInCart->cartOwner = Auth::id();
        $foodInCart->quantity = $foodOnMenu->quantity;
        $foodInCart->save();

        return redirect('/menu')->with('success',$foodInCart->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
