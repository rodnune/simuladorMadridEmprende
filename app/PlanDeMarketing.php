<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


use Storage;
use File;
use Zipper;

class PlanDeMarketing extends Model
{
    //

    protected $table='plan_de_marketing';
    protected $primaryKey = 'id_plan_empresa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_plan_empresa','caracteristicas_mercado', 'barreras_entrada','oportunidades','productos_servicios','clientes','proveedores','politica_precios','ubi_emplazamiento','ubi_transporte','ubi_plano',
        'estrategia_comunicacion','acciones_concretas','fotografia','analisis_competencias','coste_mensual_unidades','ventas_1','ventas_2','ventas_3','ventas_4','ventas_5','ventas_6','ventas_7','ventas_8','ventas_9','ventas_10','ventas_11','ventas_12','compras_1','compras_2','compras_3','compras_4',
    'compras_5','compras_6','compras_7','compras_8','compras_9','compras_10','compras_11','compras_12'];

    // Para acciones_concretas, como son datos estáticos, se puede poner una tabla HTML que se edite con el tiny.
    // Lo mismo para el análisis de la competencia



    public function planEmpresa()
    {
        return $this->belongsTo('App\PlanEmpresa', 'id_plan_empresa','id');
    }


    public  function total_ventas(){

            $total_ventas = $this->ventas_1 + $this->ventas_2 + $this->ventas_3 + $this->ventas_4 + $this->ventas_5 + $this->ventas_6 + $this->ventas_7 + $this->ventas_8 + $this->ventas_9 + $this->ventas_10 + $this->ventas_11 + $this->ventas_12;
            return $total_ventas;
    }

    public  function total_compras(){
            $total_compras = $this->compras_1 + $this->compras_2 + $this->compras_3 + $this->compras_4 + $this->compras_5 + $this->compras_6 + $this->compras_7 + $this->compras_8 + $this->compras_9 + $this->compras_10 + $this->compras_11 + $this->compras_12;
        return $total_compras ;
    }

    public function ubi_plano_src(){

        $fichero  = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $this->created_at)->format("YmdHis") . "." . $this->ubi_plano;

        return "/storage/".$fichero;
    }
    public function fotografia_src(){

        $fichero  = Auth::id() . "." . Carbon::createFromFormat("Y-m-d H:i:s", $this->created_at)->format("YmdHis") . "." . $this->fotografia;

        return "/storage/".$fichero;
    }
}
