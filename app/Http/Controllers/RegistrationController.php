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
        return view('auth.register');
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
        
     

       User::create([
            'email' => $email,
            'password' => $passwordHash,
            'role_id' => 3
        ]);

      

        //Running as host
        config(['database.connections.pgsqlAuth.username' => env('DB_USERNAME')]);
        config(['database.connections.pgsqlAuth.password' => env('DB_PASSWORD')]);


        DB::connection('pgsqlAuth')
            ->select("INSERT INTO users(email, password, role_id)
			VALUES 
			('$email','$passwordHash',3)");
        
        return redirect('/home');
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
