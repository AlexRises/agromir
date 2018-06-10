<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class Product_Plant_CulturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    
        $prod_plant = DB::select('select * from products_plant_culture()');
        
        $culture = DB::select('select * from plant__cultures');

        $branch = DB::select('select * from branches');

        return view('prod_plant_culture', compact('prod_plant', 'culture', 'branch'));
    
    }

    public function predindex()

    {
        $cult = DB::select('select * from plant__cultures');

        $prod_plant = DB::select('select * from products_plant_culture()');

        return view ('predict', compact('cult', 'prod_plant'));

    }


    public function result()
    {

        $elements = (request('culture_id'));

        $quantity = (int)(request('quantity'));

//        dd($quantity);

//        $i = 0;


//        for ($i; $i<$elements; $i += 1)
//        {

//            $predict = DB::select(("select * from predict_land(?,?)"), $elements, $quantity);


//
//            $cult = DB::select('select * from plant__cultures');


////            dd($culture)

        $predict = DB::select('select * from predict_land(' . $elements . ', ' . $quantity. ')');
////
//        dd($predict);
//    }
//            foreach($elements as $key => $arr){
//
//               
////
////
//            }

        return view ('predict', compact('predict'));
    }

//    public function culture_filter()//аналогично для типов техники
//    {
//
//
//        $elements = count(request('plant_culture_id'));
//
//        $i = 0;
////        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;
//
//
//        for ($i; $i<$elements; $i += 1)
//        {
//
//
//            $prod_plant = DB::select(('select * from products_plant_culture() where culture_id = ?'), [request('plant_culture_id')]);
//
//            $culture = DB::select('select * from plant__cultures');
//
//
////            dd($culture)
//
//            return view('prod_plant_culture', compact('prod_plant', 'culture'));
//
//
//
//        };
//
////        dd($culture);
//
//
//    }


    public function culture_filter()//аналогично для типов техники
    {


        $elements = count(request('plant_culture_id'));



        $i = 0;
//        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;


        for ($i; $i<$elements; $i += 1)
        {


            $prod_plant = DB::select(('select * from products_plant_culture() where culture_id = ?'), [request('plant_culture_id')]);

            $culture = DB::select('select * from plant__cultures');


//            dd($culture)

            return view('prod_plant_culture', compact('prod_plant', 'culture'));



        };

//        dd($culture);


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
        //
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
