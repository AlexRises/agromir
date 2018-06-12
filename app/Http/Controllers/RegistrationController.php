<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Staff;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = DB::select('select *
            from roles');
        return view('auth.register', compact('position'));

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
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $email = request('email');
        $passwordHash = hash('sha512', request('password'));

        $elements = count($request->position);

        $i = 0;
//        $product_price = Invoice_Product::where('product', '=',$request->product_id[ $i ] )->first()->price;


        for ($i; $i<$elements; $i += 1)
        {
            User::create([
                'email' => $email,
                'password' => $passwordHash,
                'role_id' => $request->position[ $i ]
            ]);

            $pos = $request->position[ $i ];
//Running as host
            config(['database.connections.pgsqlAuth.username' => env('DB_USERNAME')]);
            config(['database.connections.pgsqlAuth.password' => env('DB_PASSWORD')]);


            $use = DB::connection('pgsqlAuth')
                ->select("INSERT INTO users(email, password, role_id)
			VALUES 
			('$email','$passwordHash', '$pos')");


        };

        
        return redirect('/login');
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
