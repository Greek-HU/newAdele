<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('opp_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('opp_id');
            $table->foreign('opp_id')->references('id')->on('nail_opportunities');
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opp_size');
    }
};
