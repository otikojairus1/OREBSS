<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $MenuList = menu::all();
        //dd($MenuList);
        return view('menu')->with('MenuList', $MenuList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createmenu");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedMenu = $request->validate([
            'name' => 'Required',
            'menuDescription' => 'Required',
            'price' => 'Required',
            'quantity' => 'Required | max:20'
        ]);

        // $validatedMenu->create(
        //     $validatedMenuname
        // );

        $newMenu = new menu();
        $newMenu->name = $validatedMenu['name'];
        $newMenu->menuDescription = $validatedMenu['menuDescription'];
        $newMenu->price = $validatedMenu['price'];
        $newMenu->quantity = $validatedMenu['quantity'];
        $newMenu->save();

        return redirect('/menu/create')->with('status','Menu Added Successfully!!!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selectedMeal = menu::findorfail($id);
        //dd($selectedMeal);
        return view('menuDetail')->with('foodDetail',$selectedMeal);
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
     * load the edit page
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpage()
    {   
        $MenuList = menu::all();
        //dd($MenuList);
       // return view('menu')->with('MenuList', $MenuList);
        
       return view('editpage')->with('MenuList', $MenuList);;
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
