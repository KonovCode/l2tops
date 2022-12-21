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
        Schema::create('vip_banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('img');
            $table->string('file_name');
            $table->string('link');
            $table->integer('buy_term');
            $table->date('buy_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vip_banners');
    }
};
