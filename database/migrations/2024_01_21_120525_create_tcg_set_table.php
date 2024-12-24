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
        Schema::create('tcg_set', function (Blueprint $table) {
            $table->id();
            $table->string('short_name');
            $table->string('name');
            $table->date('release')->nullable();
            $table->integer('card_amount');
            $table->unsignedBigInteger('tcg_franchise_id');
            $table->timestamps();

            $table->foreign('tcg_franchise_id')->references('id')->on('tcg_franchise');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcg_set');
    }
};
