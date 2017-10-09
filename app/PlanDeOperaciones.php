<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Storage;
use File;
use Zipper;

class PlanDeOperaciones extends Model
{
    //

    protected $table='plan_de_operaciones';
    protected $primaryKey = 'id_plan_empresa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_plan_empresa','fecha_de_operacion', 'analisis_interno','fabricacion_protocolos','condicionantes_externos','recursos_materiales','recursos_inmateriales'];
    // Para acciones_concretas, como son datos estáticos, se puede poner una tabla HTML que se edite con el tiny.
    // Lo mismo para el análisis de la competencia



    public function planEmpresa()
    {
        return $this->belongsTo('App\PlanEmpresa', 'id_plan_empresa','id');
    }

}
