<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanDeOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_de_operaciones', function (Blueprint $table) {
            $table->date('fecha_de_operacion');
            $table->text('analisis_interno');
            $table->text('fabricacion_protocolos');
            $table->text('condicionantes_externos');
            $table->text('recursos_materiales');
            $table->text('recursos_inmateriales');
            $table->integer('id_plan_empresa')->unsigned();
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
        Schema::dropIfExists('plan_de_operaciones');
    }
}
