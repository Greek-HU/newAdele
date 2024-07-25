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
        Schema::create('nails_groupment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('nail_type');
            $table->unsignedBigInteger('opp_id');
            $table->foreign('opp_id')->references('id')->on('nail_opportunities');
            $table->unsignedBigInteger('price_id');
            $table->foreign('price_id')->references('id')->on('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nails_groupment');
    }
};
