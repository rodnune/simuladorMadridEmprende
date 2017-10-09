<?php

namespace App\Http\Controllers;

use App\PlanEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        session()->forget("PlanEmpresa");
        session()->forget("planDeMarketing");
        // Buscamos todas los planes de empresa y los mostramos en la pantalla inicial.

        $PlanesEmpresa = PlanEmpresa::where('user_id', Auth::id())
            ->orderBy('name', 'asc')
            ->get();



        return view('home')->with('PlanesEmpresa',$PlanesEmpresa);
    }


}
