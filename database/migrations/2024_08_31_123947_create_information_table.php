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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->boolean('newsletter_on_off');
            $table->string('footer_copyright');
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->mediumText('contact_map_iframe');
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
        Schema::dropIfExists('information');
    }
};