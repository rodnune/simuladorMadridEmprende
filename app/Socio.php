<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    //

    protected $table='socios';
    protected $primaryKey = 'id_plan_empresa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos','experiencia','id_plan_empresa'
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
