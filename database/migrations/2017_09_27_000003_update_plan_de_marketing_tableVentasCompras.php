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

            
            //$table->dropColumn('ventas_1');
            $table->float('ventas_1',10,2);
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

            
            $table->dropColumn('ventas_1');


        });
    }
}
