<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Invoice;

use DB;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = DB::select('select * from invoice_state()');

        return view ('invoice', compact('invoice'));

    }

    public function newinvoice()
    {
        $provlist = DB::select('select * from providers()');
        return view ('new_invoice', compact('provlist'));
    }

//    public function makeInvoice(AddInvoiceRequest $request)
//    {
//        $elements = count($request->provider_id);
//        $i = 1;
//
//        for ($i; $i<$elements; $i += 1)
//        {
//            Invoice::create([
//                'date_of_delivery'=>$request->date_of_delivery,
//                'provider'=>$request->provider_id[ $i ]
//
//
//        ]);
//        };

//     
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $elements = count($request->provider_id);
        $i = 0;

        for ($i; $i<$elements; $i += 1)
        {
            Invoice::create([
                'date_of_delivery'=>request('date_of_delivery'),
                'provider'=>$request->provider_id[ $i ]


            ]);
        };

//        foreach ($request->provider_id as $provider)
//        {
//            Invoice::create([
//                'date_of_delivery'=>$request->date_of_delivery,
//                'provider'=>$provider
//            ]);
//        }

        return redirect ('/invoice');

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
