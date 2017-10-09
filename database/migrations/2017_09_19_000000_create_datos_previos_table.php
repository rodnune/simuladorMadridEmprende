<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPreviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_previos', function (Blueprint $table) {
            $table->string('nombre_empresa');
            $table->text('origen_idea');
            $table->text('elementos_identificativos');
            $table->integer('id_plan_empresa')->unsigned();
            $table->timestamps();

            $table->foreign('id_plan_empresa')
            ->references('id')
            ->on('plan_empresa')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_previos');
    }
}
