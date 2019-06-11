<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;

use DB;

class StaffController extends Controller
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
        $staff = DB::select('select * from staff_state()');

        $pos = DB::select('select distinct position from staff');

        $cit = DB::select('select distinct city from branch');

        return view('staff', compact('staff', 'pos', 'cit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function staff_filter()//аналогично для типов техники
        {
            $elements = count(request('position_id'));

//            $city_elements = count(request('city_id'));

            $i = 0;
//            $j = 0;
    //        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;

            for ($i; $i<$elements; $i += 1)
            {


                    $staff = DB::select(('select * from staff_state() where pos = ?'), request('position_id'));
//                    $el = request('position_id');
////                    dd($el);
//                    $mystring = implode(',', array_column($el, 0));
//                    dd($mystring);
//
//
//                    $staff = DB::select('select * from staff_state()')->where($el_string, function ($query, $el_string) {
//                        $query->where('pos', $el_string);
//                    })->get();
//
//                    dd($staff);



                    $pos = DB::select('select distinct position from staff');



                    return view('staff', compact('staff', 'pos'));

                };

    //            $pos = $request->position[ $i ];




        }

    public function staff_add()
    {
        $branch = DB::select('select * from branch');

        $position = DB::select('select distinct position from staff');


        return view('/staff_add', compact('branch', 'position'));
    }

    public function staff_update()
    {
        $branch = DB::select('select * from branch');

        $position = DB::select('select distinct position from staff');


        return view('/staff_update', compact('branch', 'position'));
    }
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
        $elements = count($request->position);
        $i = 0;
//        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;


        for ($i; $i<$elements; $i += 1)
        {
            Staff::create([
                'name'=>$request->name,
                'patronym'=>$request->patronym,
                'surname'=>$request->surname,
                'phone'=>$request->phone,
                'position'=>$request->position[ $i ],
                'payment'=>request('payment'),
                'branch'=>$request->branch[ $i ],
                'address'=>$request->address
            ]);

        };

        return redirect ('/staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $branch = DB::select('select * from branch');

        $position = DB::select('select distinct position from staff');


        $elements = count([request('id')]);


        $i = 0;

        for ($i; $i<$elements; $i += 1)
        {
            $staff = DB::select(('select * from staff_state() where id = ?'), [$id]);

        }
        return view ('/staff_update', compact('staff', 'position', 'branch'));

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
    public function update(Request $request)
    {
        $elements = count($request->position);
        $i = 0;


        for ($i; $i<$elements; $i += 1)
        {
            $staff_id=$request->id;
            $name=$request->name;
            $patronym=$request->patronym;
            $surname=$request->surname;
            $phone=$request->phone;
            $position=$request->position[ $i ];
            $payment=$request->payment;
            $branch=$request->branch[ $i ];
            $address=$request->address;

            Staff::where('staff_id', $staff_id)->update([
                'name'=>$name,
                'patronym'=>$patronym,
                'surname'=>$surname,
                'phone'=> $phone,
                'position'=>$position,
                'payment'=>$payment,
                'branch'=>$branch,
                'address'=>$address

            ]);

//
        }

       return redirect('/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//     ;
    }
}
