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
        Schema::create('onoffsections', function (Blueprint $table) {
            $table->id();
            $table->boolean('home_service_on_off')->default(false);
            $table->boolean('home_product_on_off')->default(false);
            $table->boolean('home_about_on_off')->default(false);
            $table->boolean('home_contact_on_off')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onoffsections');
    }
};