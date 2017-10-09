<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlanEmpresa;
use App\PlanRecursosHumanos;

class PlanRecursosHumanosController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkuserplan');

    }


	public function planRecursosHumanos($id){

		 if (PlanRecursosHumanos::where('id_plan_empresa',$id)->exists()){
            //$PlanDeMarketing = PlanDeMarketing::where('id_plan_empresa',$id)->first();
            $plan_rh = PlanRecursosHumanos::find($id);
            return view('planDeRecursosHumanos/viewPlanDeRecursosHumanos',['action' => 'view', 'id' =>$id,'planRecursosHumanos'=>$plan_rh]);
        }else{

            return view('planDeRecursosHumanos/editPlanDeRecursosHumanos',['action' => 'new', 'id' =>$id,'planRecursosHumanos'=>'']);
        }



	}
    
}
