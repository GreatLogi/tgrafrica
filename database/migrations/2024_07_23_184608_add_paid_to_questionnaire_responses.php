<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questionnaire_responses', function (Blueprint $table) {
            $table->date('response_date')->nullable();
            $table->time('response_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questionnaire_responses', function (Blueprint $table) {
            $table->dropColumn('response_date');
            $table->dropColumn('response_time');
        });
    }
};
