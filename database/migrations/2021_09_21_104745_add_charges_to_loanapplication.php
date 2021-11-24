<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChargesToLoanapplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::table('loan_applications', function (Blueprint $table) {
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
    Schema::table('loan_applications', function ($table) {
                $table->dropColumn([
                    'charges',
                ]);
            });
    }
}