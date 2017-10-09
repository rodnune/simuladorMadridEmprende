<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Session;

class PlanEmpresa extends Model
{
    //

    protected $table='plan_empresa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id','id');
    }

    public function datosPrevios(){

        return $this->hasOne('App\DatosPrevios','id_plan_empresa','id');
    }

    public function planDeMarketing(){

        return $this->hasOne('App\PlanDeMarketing','id_plan_empresa','id');
    }

    public static function check($id){

        $PlanEmpresa = PlanEmpresa::find($id);

        if ($PlanEmpresa){
            if ($PlanEmpresa->user_id !=  Auth::id()){
                Session::flash('mensaje', 'Acceso denegado');
                Session::flash('mensajeType', 'danger');
                header('Location: /home/');
                exit();
            }
        }else{
            header('Location: /home/');
            exit();
        }

    }
}
