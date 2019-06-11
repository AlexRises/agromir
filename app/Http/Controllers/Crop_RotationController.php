<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class Crop_RotationController extends Controller
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
        $kherson = DB::select('select * from crop_rot_info_kherson()');

        $season = DB::select('select distinct season from crop_rotation');

        return view('crop_rotation_kherson', compact('kherson', 'season'));
    }

    public function crop_rotation_filter()//аналогично для типов техники
    {
        $elements = count(request('season_id'));


        $i = 0;
//

        for ($i; $i<$elements; $i += 1)
        {

            $report = DB::select(('select * from crop_rot_info_kherson() where season = ?'), request('season_id'));

            $season = DB::select('select distinct season from crop_rotation');

            $culture = DB::select('select distinct culture_name from crop_rotation');


            return view('crop_rotation_kherson_report', compact('report', 'season', 'culture'));

        };


    }

    public function crop_rotation_filter_by_culture()//аналогично для типов техники
    {
        $elements = count(request('culture_id'));


        $i = 0;
//

        for ($i; $i < $elements; $i += 1) {

            $report = DB::select(('select * from crop_rot_info_kherson() where culture = ?'), request('culture_id'));

            $culture = DB::select('select distinct culture_name from crop_rotation');

            return view('crop_rotation_kherson_report_by_culture', compact('report', 'culture'));

        };

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
