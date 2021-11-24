<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStaffBvnGrossToBorrowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrowers', function (Blueprint $table) {
            //
            $table->string('staff_id')->nullable();   
            $table->string('bvn')->nullable();
            $table->string('total_salary')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrowers', function (Blueprint $table) {
            //
            $table->dropColumn([
                'staff_id',
                'bvn',
                'total_salary'
            ]);
        });
    }
}
