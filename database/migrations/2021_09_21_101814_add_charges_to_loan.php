<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChargesToLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::table('loans', function (Blueprint $table) {
            $table->string('charges');
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            //
    Schema::table('loans', function ($table) {
                $table->dropColumn([
                    'charges',
                ]);
            });
    }
}