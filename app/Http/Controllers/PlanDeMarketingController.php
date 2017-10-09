<?php

namespace App\Http\Controllers;

use App\User;
use App\PlanDeMarketing;
use App\PlanEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use Carbon\Carbon;

use Storage;
use File;
use Zipper;

class PlanDeMarketingController extends Controller
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


    public function planDeMarketing($id){

        //dump(session()->all());
        //$PlanEmpresa= PlanEmpresa::find($id);
        //session()->forget('PlanEmpresa');
        //session()->put('PlanEmpresa', $PlanEmpresa);
        session()->put('section','planDeMarketing');
        //dump(session()->all());
        // La primera vez, que no habrá ningún plan de marketing creado aparecerá el botón de crear plan de marketing
        // Después se mostrarán los datos y seguidamente el botón de EDITAR.


        if (PlanDeMarketing::where('id_plan_empresa',$id)->exists()){
            //$PlanDeMarketing = PlanDeMarketing::where('id_plan_empresa',$id)->first();
            $PlanDeMarketing = PlanDeMarketing::find($id);
            return view('planDeMarketing/viewPlanDeMarketing',['action' => 'view', 'id' =>$id,'PlanDeMarketing'=>$PlanDeMarketing]);
        }else{

            return view('planDeMarketing/editPlanDeMarketing',['action' => 'new', 'id' =>$id,'PlanDeMarketing'=>'']);
        }
    }


    public function editPlanDeMarketing($id){
        //dump(session()->all());

        //PlanEmpresa::check($id);
        $PlanDeMarketing = PlanDeMarketing::find($id);

        return view('planDeMarketing/editPlanDeMarketing',['action' => 'edit', 'id' =>$id,'PlanDeMarketing'=>$PlanDeMarketing]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\PlanDeMarketing
     */
    public function savePlanDeMarketing(Request $request,$id)
    {

        $file_ubi_plano = $request->file('ubi_plano');
        if ($file_ubi_plano)
            $ubi_plano = $file_ubi_plano->getClientOriginalName();
        else
            $ubi_plano = '';


        $file_fotografia = $request->file('fotografia');
        if ($file_fotografia)
            $fotografia = $file_fotografia->getClientOriginalName();
        else
            $fotografia = '';


        $PlanDeMarketing = PlanDeMarketing::create([
            'id_plan_empresa' => $id,
            'caracteristicas_mercado' => $_POST['caracteristicas_mercado'],
            'barreras_entrada' => $_POST['barreras_entrada'],
            'oportunidades' => $_POST['oportunidades'],
            'productos_servicios' => $_POST['productos_servicios'],
            'analisis_competencias' => $_POST['analisis_competencias'],
            'clientes' => $_POST['clientes'],
            'proveedores' => $_POST['proveedores'],
            'politica_precios' => $_POST['politica_precios'],
            'ubi_emplazamiento' => $_POST['ubi_emplazamiento'],
            'ubi_transporte' => $_POST['ubi_transporte'],
            'ubi_plano' => $ubi_plano,
            'estrategia_comunicacion' =>  $_POST['estrategia_comunicacion'],
            'acciones_concretas' =>  $_POST['acciones_concretas'],
            'fotografia' =>  $fotografia,
            'coste_mensual_unidades' => $_POST['coste_mensual_unidades'],
            'ventas_1' => $_POST['ventas_1'],
            'ventas_2' => $_POST['ventas_2'],
            'ventas_3' => $_POST['ventas_3'],
            'ventas_4' => $_POST['ventas_4'],
            'ventas_5' => $_POST['ventas_5'],
            'ventas_6' => $_POST['ventas_6'],
            'ventas_7' => $_POST['ventas_7'],
            'ventas_8' => $_POST['ventas_8'],
            'ventas_9' => $_POST['ventas_9'],
            'ventas_10' => $_POST['ventas_10'],
            'ventas_11' => $_POST['ventas_11'],
            'ventas_12' => $_POST['ventas_12'],
            'compras_1' => $_POST['compras_1'],
            'compras_2' => $_POST['compras_2'],
            'compras_3' => $_POST['compras_3'],
            'compras_4' => $_POST['compras_4'],
            'compras_5' => $_POST['compras_5'],
            'compras_6' => $_POST['compras_6'],
            'compras_7' => $_POST['compras_7'],
            'compras_8' => $_POST['compras_8'],
            'compras_9' => $_POST['compras_9'],
            'compras_10' => $_POST['compras_10'],
            'compras_11' => $_POST['compras_11'],
            'compras_12' => $_POST['compras_12']
        ]);

        //Guardo aqui el fichero para poder poner la fecha created_at y evitar sobrescribir ficheros con el mismo nombre.
        if ($file_ubi_plano) {
            $storeName = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $PlanDeMarketing->created_at)->format("YmdHis") . "." . $ubi_plano;
            $resultFile_ubi_plano = Storage::disk('public')->put($storeName, File::get($file_ubi_plano));
        } else {
            $resultFile_ubi_plano = true;
        }
        //Guardo aqui el fichero para poder poner la fecha created_at y evitar sobrescribir ficheros con el mismo nombre.
        if ($file_fotografia) {
            $storeName = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $PlanDeMarketing->created_at)->format("YmdHis") . "." . $fotografia;
            $resultFile_fotografia = Storage::disk('public')->put($storeName, File::get($file_fotografia));
        } else {
            $resultFile_fotografia = true;
        }



        if ($PlanDeMarketing && $resultFile_fotografia && $resultFile_ubi_plano) {
            Session::flash('mensaje', 'Guardado con éxito.');
            Session::flash('mensajeTitle', 'Plan de Marketing');
            Session::flash('mensajeType', 'success');
        } else {
            //$gasto->delete();
            Session::flash('mensaje', 'Error al crear el Plan de Marketing');
            Session::flash('mensajeTitle', 'Plan de Marketing');
            Session::flash('mensajeType', 'danger');
        }


        return redirect('/plan-de-marketing/'.$id);
    }


    public function updatePlanDeMarketing(Request $request,$id){

        $PlanDeMarketing= PlanDeMarketing::find($id);

        $file_ubi_plano = $request->file('ubi_plano');
        if ($file_ubi_plano)
            $ubi_plano = $file_ubi_plano->getClientOriginalName();
        else
            $ubi_plano = $PlanDeMarketing->ubi_plano;


        $file_fotografia = $request->file('fotografia');
        if ($file_fotografia)
            $fotografia = $file_fotografia->getClientOriginalName();
        else
            $fotografia = $PlanDeMarketing->fotografia;


        $PlanDeMarketing->update(
            [
                'caracteristicas_mercado' => $_POST['caracteristicas_mercado'],
                'barreras_entrada' => $_POST['barreras_entrada'],
                'oportunidades' => $_POST['oportunidades'],
                'productos_servicios' => $_POST['productos_servicios'],
                'analisis_competencias' => $_POST['analisis_competencias'],
                'clientes' => $_POST['clientes'],
                'proveedores' => $_POST['proveedores'],
                'politica_precios' => $_POST['politica_precios'],
                'ubi_emplazamiento' => $_POST['ubi_emplazamiento'],
                'ubi_transporte' => $_POST['ubi_transporte'],
                'ubi_plano' => $ubi_plano,
                'estrategia_comunicacion' => $_POST['estrategia_comunicacion'],
                'acciones_concretas' => $_POST['acciones_concretas'],
                'fotografia' => $fotografia,
                'coste_mensual_unidades' => $_POST['coste_mensual_unidades'],
                'ventas_1' => $_POST['ventas_1'],
                'ventas_2' => $_POST['ventas_2'],
                'ventas_3' => $_POST['ventas_3'],
                'ventas_4' => $_POST['ventas_4'],
                'ventas_5' => $_POST['ventas_5'],
                'ventas_6' => $_POST['ventas_6'],
                'ventas_7' => $_POST['ventas_7'],
                'ventas_8' => $_POST['ventas_8'],
                'ventas_9' => $_POST['ventas_9'],
                'ventas_10' => $_POST['ventas_10'],
                'ventas_11' => $_POST['ventas_11'],
                'ventas_12' => $_POST['ventas_12'],
                'compras_1' => $_POST['compras_1'],
                'compras_2' => $_POST['compras_2'],
                'compras_3' => $_POST['compras_3'],
                'compras_4' => $_POST['compras_4'],
                'compras_5' => $_POST['compras_5'],
                'compras_6' => $_POST['compras_6'],
                'compras_7' => $_POST['compras_7'],
                'compras_8' => $_POST['compras_8'],
                'compras_9' => $_POST['compras_9'],
                'compras_10' => $_POST['compras_10'],
                'compras_11' => $_POST['compras_11'],
                'compras_12' => $_POST['compras_12']

            ]
        );

        //Guardo aqui el fichero para poder poner la fecha created_at y evitar sobrescribir ficheros con el mismo nombre.
        if ($file_ubi_plano) {
            $storeName = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $PlanDeMarketing->created_at)->format("YmdHis") . "." . $ubi_plano;
            $resultFile_ubi_plano = Storage::disk('public')->put($storeName, File::get($file_ubi_plano));
        } else {
            $resultFile_ubi_plano = true;
        }
        //Guardo aqui el fichero para poder poner la fecha created_at y evitar sobrescribir ficheros con el mismo nombre.
        if ($file_fotografia) {
            $storeName = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $PlanDeMarketing->created_at)->format("YmdHis") . "." . $fotografia;
            $resultFile_fotografia = Storage::disk('public')->put($storeName, File::get($file_fotografia));
        } else {
            $resultFile_fotografia = true;
        }

        $PlanDeMarketing->save();


        if ($PlanDeMarketing && $resultFile_fotografia && $resultFile_ubi_plano) {
            Session::flash('mensaje', 'Guardado con éxito.');
            Session::flash('mensajeTitle', 'Plan de Marketing');
            Session::flash('mensajeType', 'success');
        } else {
            //$gasto->delete();
            Session::flash('mensaje', 'Error al crear el Plan de Marketing');
            Session::flash('mensajeTitle', 'Plan de Marketing');
            Session::flash('mensajeType', 'danger');
        }

        return redirect('/plan-de-marketing/'.$id);
    }

}
