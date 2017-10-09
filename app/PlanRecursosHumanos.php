<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanRecursosHumanos extends Model
{
    protected $table='plan_de_recursos_humanos';
    protected $primaryKey = 'id_plan_empresa';


    protected $fillable = [
        'convenio_aplicable','tipo_de_contrato','coste_salaria_seguridad_social','prevencion_riesgos_laborales','beneficios_sociales'];


        public function planEmpresa(){
        
        	return $this->belongsTo('App\PlanEmpresa', 'id_plan_empresa','id');
    
    	}
}
