<?php

namespace App\Http\Controllers;

use App\User;
use App\PlanDeOperaciones;
use App\PlanEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use Carbon\Carbon;

use Storage;
use File;
use Zipper;

class PlanDeOperacionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkuserplan');

    }


    public function planDeOperaciones($id){

        //dump(session()->all());
        //$PlanEmpresa= PlanEmpresa::find($id);
        //session()->forget('PlanEmpresa');
        //session()->put('PlanEmpresa', $PlanEmpresa);
        session()->put('section','planDeOperaciones');
        //dump(session()->all());
        // La primera vez, que no habrá ningún plan de marketing creado aparecerá el botón de crear plan de marketing
        // Después se mostrarán los datos y seguidamente el botón de EDITAR.


        if (PlanDeOperaciones::where('id_plan_empresa',$id)->exists()){
            //$PlanDeOperaciones = PlanDeOperaciones::where('id_plan_empresa',$id)->first();
            $PlanDeOperaciones = PlanDeOperaciones::find($id);
            return view('planDeOperaciones/viewPlanDeOperaciones',['action' => 'view', 'id' =>$id,'PlanDeOperaciones'=>$PlanDeOperaciones]);
        }else{

            return view('planDeOperaciones/editPlanDeOperaciones',['action' => 'new', 'id' =>$id,'PlanDeOperaciones'=>'']);
        }
    }


    public function editPlanDeOperaciones($id){
        //dump(session()->all());

        //PlanEmpresa::check($id);
        $PlanDeOperaciones = PlanDeOperaciones::find($id);

        return view('PlanDeOperaciones/editPlanDeOperaciones',['action' => 'edit', 'id' =>$id,'PlanDeOperaciones'=>$PlanDeOperaciones]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\PlanDeOperaciones
     */
    public function savePlanDeOperaciones(Request $request,$id)
    {




//        'id_plan_empresa','fecha_de_operacion', 'analisis_interno','fabricacion_protocolos','condicionantes_externos','recursos_materiales','recursos_inmateriales'];

//dd($request->fecha_de_operacion);

        $PlanDeOperaciones = PlanDeOperaciones::create([
            'id_plan_empresa' => $id,
            'fecha_de_operacion' => Carbon::createFromFormat("d/m/Y",$request->input("fecha_de_operacion"))->format("Y-m-d"),
            'fabricacion_protocolos' => $_POST['fabricacion_protocolos'],
            'analisis_interno' => $_POST['analisis_interno'],
            'condicionantes_externos' => $_POST['condicionantes_externos'],
            'recursos_materiales' => $_POST['recursos_materiales'],
            'recursos_inmateriales' => $_POST['recursos_inmateriales']

        ]);



        if ($PlanDeOperaciones) {
            Session::flash('mensaje', 'Guardado con éxito.');
            Session::flash('mensajeTitle', 'Plan de Operaciones');
            Session::flash('mensajeType', 'success');
        } else {
            //$gasto->delete();
            Session::flash('mensaje', 'Error al crear el Plan de Operaciones');
            Session::flash('mensajeTitle', 'Plan de OperacionesMarketing');
            Session::flash('mensajeType', 'danger');
        }


        return redirect('/plan-de-operaciones/'.$id);
    }


    public function updatePlanDeOperaciones(Request $request,$id){

        $PlanDeOperaciones= PlanDeOperaciones::find($id);


        $PlanDeOperaciones->update(
            [
                'id_plan_empresa' => $id,
                'fecha_de_operacion' => Carbon::createFromFormat("d-m-Y",$request->input("fecha_de_operacion"))->format("Y-m-d"),
                'fabricacion_protocolos' => $_POST['fabricacion_protocolos'],
                'analisis_interno' => $_POST['analisis_interno'],
                'condicionantes_externos' => $_POST['condicionantes_externos'],
                'recursos_materiales' => $_POST['recursos_materiales'],
                'recursos_inmateriales' => $_POST['recursos_inmateriales']

            ]
        );
        $PlanDeOperaciones->save();


        if ($PlanDeOperaciones) {
            Session::flash('mensaje', 'Guardado con éxito.');
            Session::flash('mensajeTitle', 'Plan de Operaciones');
            Session::flash('mensajeType', 'success');
        } else {
            //$gasto->delete();
            Session::flash('mensaje', 'Error al crear el Plan de Operaciones');
            Session::flash('mensajeTitle', 'Plan de OperacionesMarketing');
            Session::flash('mensajeType', 'danger');

        }

        return redirect('/plan-de-operaciones/'.$id);
    }

}
