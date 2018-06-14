<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Technic;
use DB;

class TechnicController extends Controller
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
        $technic = DB::select('select * from technic_state()'); //Запрос в процедуру
        $technic_type = DB::select('select DISTINCT type from technic_state()');
//        $technic_branch = DB::select('select DISTINCT branch from technic_state()');
        
        return view('technic', compact('technic'));
    }

    public function branch_filter()
    {
        $branch = request('branch'); //Фильтрация по филиалам


////
    



        $technic = DB::select(('SELECT * FROM technic_state() where branch = ?'), $branch);//выбираю филиалы



       return view('technic', compact('technic'));

    }

    public function technic_filter()//аналогично для типов техники
    {

        $type = request('technic');



        $technic = DB::select(('SELECT * FROM technic_state() where type = ?'), $type);



        return view('technic', compact('technic'));

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
