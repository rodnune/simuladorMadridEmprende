<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanDeRecursosHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_de_recursos_humanos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('organigrama');
            $table->text('convenio_aplicable');
            $table->text('tipo_de_contrato');
            $table->text('coste_salaria_seguridad_social');
            $table->text('prevencion_riesgos_laborales');
            $table->text('beneficios_sociales');
             $table->foreign('id_plan_empresa')
            ->references('id')
            ->on('plan_empresa')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_de_recursos_humanos');
    }
}
