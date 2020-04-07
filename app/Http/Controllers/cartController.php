<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\order;
use App\cart;
use App\Bill;
class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //add to cart table in db

        // $foodDetail = order::where('foodId', $foodid)->first();
        $foodDetail = order::where('foodId', $request->id)->first();
        // dd(Auth::user()->name);
        $newBill->userid = Auth::user()->id;
        $newBill->price = 0;

        $newcart->user_id = Auth::user()->id;
        $newcart->username = Auth::user()->name;
        $newcart->price = $foodDetail->price;
        $newcart->description = $foodDetail->description;
        $newcart->foodId = $foodDetail->foodId;
        $newcart->foodOrdered = $foodDetail->foodname;
        $newcart->save();
        $newBill->save();



        // dd($foodDetail->foodname);
        


        return redirect('/order')->with('fooddetail',$foodDetail->foodname);
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
    public function show($id)
    {
        $cartContents = cart::where('user_id', $id)->get();
        

        $prices = DB::table('carts')->pluck('price');
            // dd($prices);
            $oldprice = 0;

        foreach ($prices as $price) {

          $newprize = $oldprice + $price;
          $oldprice = $newprize;
          
      }

        
        $bill = Bill::where('userid', $id)->get();
    
        $bill->user_id = Auth::user()->id;
        $bill->price = $newprize;
        
        //   dd($bill);
        $bill->save();

        

        return view('cart',[
            'cartContents' => $cartContents,
            'bill' => $newprize
            ]);

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
