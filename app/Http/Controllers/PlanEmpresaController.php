<?php

namespace App\Http\Controllers;

use App\User;
use App\PlanEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PlanEmpresaController extends Controller
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


    public function newPlanEmpresa(){

        return view('planEmpresa',['action' => 'new', 'id' =>'']);
    }


    public function editPlanEmpresa($id){


        $PlanEmpresa= PlanEmpresa::find($id);

        return view('planEmpresa',['action' => 'edit', 'id' =>$id,'PlanEmpresa'=>$PlanEmpresa]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\PlanEmpresa
     */
    public function savePlanEmpresa()
    {

        PlanEmpresa::create([
            'name' => $_POST['name'],
            'user_id' => $_POST['user_id']
        ]);


        return redirect('/home');
    }


    public function updatePlanEmpresa($id){

        $PlanEmpresa= PlanEmpresa::find($id);

        $PlanEmpresa->update(
            ['name' => $_POST['name']]
        );
        $PlanEmpresa->save();

        return redirect('/home');
    }


    public function deletePlanEmpresa($id){

        $PlanEmpresa= PlanEmpresa::find($id);

        $PlanEmpresa->delete();

        return redirect('/home');
    }


    public function selectPlanEmpresa($id){

        $PlanEmpresa= PlanEmpresa::find($id);

        session()->put('PlanEmpresa', $PlanEmpresa);

        return redirect('/newDatosPrevios/'.$id);

        //return view('selectPlanEmpresa',['PlanEmpresa'=>$PlanEmpresa]);

    }


}
