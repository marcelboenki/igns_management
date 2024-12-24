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
        Schema::create('tcg_card', function (Blueprint $table) {
            $table->id();
            $table->integer('cardnumber');
            $table->string('name');
            $table->string('rarity');
            $table->integer('hp');
            $table->string('stage');
            $table->string('cardtext');
            $table->string('weakness');
            $table->string('resistance');
            $table->string('retreat_cost');
            $table->string('default_pic');
            $table->unsignedBigInteger('tcg_set_id');
            $table->timestamps();

            $table->foreign('tcg_set_id')->references('id')->on('tcg_set')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcg_card');
    }
};
