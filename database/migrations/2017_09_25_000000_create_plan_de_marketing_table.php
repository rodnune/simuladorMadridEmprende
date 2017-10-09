<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanDeMarketingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_de_marketing', function (Blueprint $table) {
            $table->text('caracteristicas_mercado');
            $table->text('barreras_entrada');
            $table->text('oportunidades');
            $table->text('productos_servicios');
            $table->text('clientes');
            $table->text('proveedores');
            $table->text('politica_precios');
            $table->string('ubi_emplazamiento');
            $table->string('ubi_transporte');
            $table->string('ubi_plano');
            $table->text('estrategia_comunicacion');
            $table->text('acciones_concretas');
            $table->string('fotografia');
            $table->text('analisis_competencias');
            $table->integer('id_plan_empresa')->unsigned();
            $table->timestamps();

            $table->foreign('id_plan_empresa')
            ->references('id')
            ->on('plan_empresa')
            ->onDelete('cascade');

        });

        //'caracteristicas_mercado', 'barreras_entrada','oportunidades','productos_servicios','clientes','proveedores','politica_precios','ubi_emplazamiento','ubi_transporte','ubi_plano',
        //'estrategia_comunicacion','acciones_concretas','fotografia','analisis_competencias'

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_de_marketing');
    }
}
