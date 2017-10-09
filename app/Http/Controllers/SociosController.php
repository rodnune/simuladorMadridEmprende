<?php

namespace App\Http\Controllers;

use App\User;
use App\Socio;
use Illuminate\Http\Request;

class SociosController extends Controller
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




    public function newSocio($id){

            return view('socios',['plan' => $id]);

    }

    public function saveSocio(Request $request){

     $apellidos    =  $request->input('apellido');
       $nombres      =  $request->input('nombre');
       $experiencias =  $request->input('experiencia');  



       for($i = 0; $i<count($apellidos); $i++){

        Socio::create([
            'nombre'           => $nombres[$i],
            'apellidos'        => $apellidos[$i],
            'experiencia'      => $experiencias[$i],
            'id_plan_empresa'  => $request->input('plan')

        ]);

       }

       return redirect('/editDatosPrevios/'.$request->input('plan'));

   }


   public function deleteSocio(Request $request){


        Socio::where('id',$request->id)->delete();

    
         return response()->json([
            'id' => $request->id,
        ]);

    }


}