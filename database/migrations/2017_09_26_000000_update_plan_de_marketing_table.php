<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlanDeMarketingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_de_marketing', function ($table) {

            $table->string('coste_mensual_unidades');

            $table->string('ventas_1');
            $table->string('ventas_2');
            $table->string('ventas_3');
            $table->string('ventas_4');
            $table->string('ventas_5');
            $table->string('ventas_6');
            $table->string('ventas_7');
            $table->string('ventas_8');
            $table->string('ventas_9');
            $table->string('ventas_10');
            $table->string('ventas_11');
            $table->string('ventas_12');

            $table->string('compras_1');
            $table->string('compras_2');
            $table->string('compras_3');
            $table->string('compras_4');
            $table->string('compras_5');
            $table->string('compras_6');
            $table->string('compras_7');
            $table->string('compras_8');
            $table->string('compras_9');
            $table->string('compras_10');
            $table->string('compras_11');
            $table->string('compras_12');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plan_de_marketing', function ($table) {

            
            $table->dropColumn('coste_mensual_unidades');

            $table->dropColumn('ventas_1');
            $table->dropColumn('ventas_2');
            $table->dropColumn('ventas_3');
            $table->dropColumn('ventas_4');
            $table->dropColumn('ventas_5');
            $table->dropColumn('ventas_6');
            $table->dropColumn('ventas_7');
            $table->dropColumn('ventas_8');
            $table->dropColumn('ventas_9');
            $table->dropColumn('ventas_10');
            $table->dropColumn('ventas_11');
            $table->dropColumn('ventas_12');

            $table->dropColumn('compras_1');
            $table->dropColumn('compras_2');
            $table->dropColumn('compras_3');
            $table->dropColumn('compras_4');
            $table->dropColumn('compras_5');
            $table->dropColumn('compras_6');
            $table->dropColumn('compras_7');
            $table->dropColumn('compras_8');
            $table->dropColumn('compras_9');
            $table->dropColumn('compras_10');
            $table->dropColumn('compras_11');
            $table->dropColumn('compras_12');


        });
    }
}
