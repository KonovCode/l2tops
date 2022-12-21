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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('chronicles');
            $table->string('rates');
            $table->date('date_open');
            $table->string('status')->default('default');
            $table->date('premium_term')->nullable();
            $table->date('status_term')->nullable();
            $table->integer('premium')->default(0);
            $table->integer('state_project')->default('0');
            $table->integer('state_public')->default(0);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
