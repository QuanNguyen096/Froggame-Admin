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
        Schema::table('questions', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained();
        });

        Schema::table('user_infos', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('recharges', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('question_packs', function (Blueprint $table) {
            $table->foreignId('question_package_detail_id')->constrained();
        });

        Schema::table('question_package_details', function (Blueprint $table) {
            $table->foreignId('question_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
    }
};
