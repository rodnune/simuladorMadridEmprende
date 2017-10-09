<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MiCuentaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('micuenta/micuenta')->with('status', '');
    }


    public function micuentaOk(){

        return view('micuenta/micuenta')->with('status', 'ok');
    }


    public function update($id){

        $User = User::find($id);

        $User->update(
            ['name' => $_POST['name'], 'last_name' => $_POST['last_name']]
        );
        $User->save();

       return redirect('/micuenta/ok');
    }
}
