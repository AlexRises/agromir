<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Product;
Use App\Invoice_Product;
Use App\Invoice;
Use App\Branch;

Use DB;


class InvoiceProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        if ($this->middleware('auth'))
        {
            return redirect('/login');
        }


    }
    public function index()
    {
        $products_prices = DB::select('select * from invoice_products_price()');

        $plist = DB::select('select * from necessary_parts()');

        $provlist = DB::select('select * from providers()');

        $invoice_info = DB::select('select * from invoice_provider()');

        $inv_prod = DB::select('select * from invoice__products');
        
        $branch = DB::select('select * from branches');
        
        return view('invoice_add', compact('products_prices', 'plist', 'provlist','invoice_info', 'inv_prod', 'branch'));
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
        $elements = count($request->product_id);
        $i = 0;
//        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;


        for ($i; $i<$elements; $i += 1)
        {
            Invoice_Product::create([
                'product'=>$request->product_id[ $i ],
                 'amount'=>$request->quantity[ $i ],
                'invoice'=>$request->invoice[ $i ],
                'unit'=>request('units'),
                'branch'=>$request->branch[ $i ]


            ]);
        };

        return redirect ('/invoice');


//        $elements = count($request->product_id);
//        $i = 0;
//        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;
//
//
//        for ($i; $i<$elements; $i += 1)
//        {
//            Invoice_Product::create([
//                'product'=>$request->product_id[ $i ],
//                'amount'=>$request->quantity[ $i ],
//                'price'=>$product_price,
//                'invoice'=>$request->invoice[ $i ],
//                'unit'=>request('units'),
//                'branch'=>$request->branch[ $i ]
//
//
//            ]);
//        };
//
//        return redirect ('/invoice');
//    }

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
