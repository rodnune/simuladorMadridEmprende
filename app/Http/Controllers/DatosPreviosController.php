<?php

namespace App\Http\Controllers;

use App\User;
use App\DatosPrevios;
use App\PlanEmpresa;
use App\Socio;
use Illuminate\Http\Request;

class DatosPreviosController extends Controller
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


    public function newDatosPrevios($id){


        //$PlanEmpresa= PlanEmpresa::find($id);

        //session()->put('PlanEmpresa', $PlanEmpresa);

        session()->put('section', 'datosPrevios');


            if (DatosPrevios::where('id_plan_empresa', '=', $id)->exists()) {
                        
                    
                        return redirect('/editDatosPrevios/'.$id);
                } else {

                    return view('datosPrevios',['action' => 'new','plan' => $id]);

                }
        


    }

     /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\PlanEmpresa
     */
    public function saveDatosPrevios(Request $request)
    
    {

            
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

            


        DatosPrevios::create([
            'nombre_empresa'            => $request->input('empresa'),
            'origen_idea'               => $request->input('origen'),
            'id_plan_empresa'           => $request->input('plan'),
            'elementos_identificativos' => $request->input('elementos'),
            
        ]);


        return redirect('/home');
    }

    public function editDatosPrevios($id){

        $datosPrevios = DatosPrevios::where('id_plan_empresa',$id)->first();


        $socios = Socio::where('id_plan_empresa',$id)->get();


        return view('datosPrevios',['action' => 'edit', 'plan' => $id , 'datosPrevios'=> $datosPrevios , 'socios' => $socios]);
    }

    public function updateDatosPrevios(Request $request){

        $datosPrevios = DatosPrevios::where('id_plan_empresa',$request->input('plan'))->first();

        $socios = Socio::where('id_plan_empresa',$request->input('plan'))->get();



        $apellidos    =  $request->input('apellido');
        $nombres      =  $request->input('nombre');
        $experiencias =  $request->input('experiencia');  

       for($i = 0; $i<count($apellidos); $i++){

             Socio::where('id',$socios[$i]->id)
                ->update(
                    ['nombre' => $nombres[$i], 
                    'apellidos' => $apellidos[$i], 
                    'experiencia' => $experiencias[$i]

                ]);
        

  
       }

   
        $datosPrevios->update(
            ['nombre_empresa' => $request->input('empresa'),
            'elementos_identificativos' => $request->input('elementos'),
            'origen_idea'               => $request->input('origen'),
        ]);

        $datosPrevios->save();

        return redirect('/home');
    }

    public function deleteDatosPrevios(Request $request){
                $id = $request->input('plan');
        $datosPrevios = DatosPrevios::where('id_plan_empresa',$id)->delete();
        $socios = Socio::where('id_plan_empresa',$id)->delete();


        return redirect('/home');

    }




}
