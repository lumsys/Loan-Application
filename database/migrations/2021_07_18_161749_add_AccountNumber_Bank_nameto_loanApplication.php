<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAccountNumberBankNametoLoanApplication extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->string('account_name');
            $table->string('account_number');
    
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
                    'account_name',
                    'account_number'
                ]);
            });
    }
    }
    
    