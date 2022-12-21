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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name_project')->nullable();
            $table->string('project_url')->nullable();
            $table->string('path_img')->nullable();
            $table->string('file_name')->nullable();
            $table->dateTime('buy_term')->nullable();
            $table->integer('state')->default('0');
            $table->integer('reserved')->default('0');
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
        Schema::dropIfExists('banners');
    }
};
