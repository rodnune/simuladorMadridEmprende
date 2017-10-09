<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePlanDeMarketingTableVentasCompras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_de_marketing', function ($table) {

            
            $table->float('ventas_1',10,2)->change();
            $table->float('ventas_2',10,2)->change();
            $table->float('ventas_3',10,2)->change();
            $table->float('ventas_4',10,2)->change();
            $table->float('ventas_5',10,2)->change();
            $table->float('ventas_6',10,2)->change();
            $table->float('ventas_7',10,2)->change();
            $table->float('ventas_8',10,2)->change();
            $table->float('ventas_9',10,2)->change();
            $table->float('ventas_10',10,2)->change();
            $table->float('ventas_11',10,2)->change();
            $table->float('ventas_12',10,2)->change();


            $table->float('compras_1',10,2)->change();
            $table->float('compras_2',10,2)->change();
            $table->float('compras_3',10,2)->change();
            $table->float('compras_4',10,2)->change();
            $table->float('compras_5',10,2)->change();
            $table->float('compras_6',10,2)->change();
            $table->float('compras_7',10,2)->change();
            $table->float('compras_8',10,2)->change();
            $table->float('compras_9',10,2)->change();
            $table->float('compras_10',10,2)->change();
            $table->float('compras_11',10,2)->change();
            $table->float('compras_12',10,2)->change();
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

            
            //$table->float('ventas_1',10,2);


        });
    }
}
