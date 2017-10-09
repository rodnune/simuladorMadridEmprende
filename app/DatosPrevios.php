<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPrevios extends Model
{
    //

    protected $table='datos_previos';
    protected $primaryKey = 'id_plan_empresa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_empresa', 'origen_idea','elementos_identificativos','id_plan_empresa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];

    public function planEmpresa()
    {
        return $this->belongsTo('App\PlanEmpresa', 'id_plan_empresa','id');
    }
}
