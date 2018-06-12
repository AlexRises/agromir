<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            return redirect ('/staff');
        }
        return view ('/login');
    }

    public function __construct()
    {
        $this->middleware('guest', ['except' => ['index', 'destroy']]);
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
        $email = request('email');
        $pasHash = hash('sha512', request('password'));


        $user = User::where('email', $email)
                     ->where('password', $pasHash)
                     ->first();

        if($user)
        {
            Auth::login($user);


        }
        else
        {
            session()->flash('messageError', 'Unlucky');
            
            return back()->withErrors([
                
                'message'=> 'Please check your data'
            ]);
        }



        DB::disconnect('pgsql');

        $user = DB::connection('pgsqlAuth')
            ->select("select users.email, users.password, roles.id, roles.name 
                      from users join roles on users.role_id = roles.id
                      where email = '$email' AND password = '$pasHash' ");


//
        if($user)
        {
            config([    'database.connections.pgsql.username' => $user[0]->name]);
            switch ($user[0]->name)
            {
                case 'chief_director':
                    config(['database.connections.pgsql.password' => env('DB_ROLE_CHIEF_DIRECTOR_PASSWORD')]);
                    break;
                case 'vice_director':
                    config(['database.connections.pgsql.password' => env('DB_ROLE_VICE_DIRECTOR_PASSWORD')]);
                    break;
                case 'chief_accountant':
                    config(['database.connections.pgsql.password' => env('DB_ROLE_CHIEF_ACCOUNTANT_PASSWORD')]);
                    break;
                case 'chief_agronomist':
                    config(['database.connections.pgsql.password' => env('DB_ROLE_CHIEF_AGRONOMIST_PASSWORD')]);
                    break;
                default:
                    break;
            }
        }

        DB::reconnect('pgsql');

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
    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
