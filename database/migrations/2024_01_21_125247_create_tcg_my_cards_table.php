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
        Schema::create('tcg_my_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tcg_my_collection_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tcg_card_id');
            $table->string('quality')->nullable();
            $table->integer('amount')->default(1);
            $table->string('storage_place')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tcg_card_id')->references('id')->on('tcg_card')->onDelete('cascade');
            $table->foreign('tcg_my_collection_id')->references('id')->on('tcg_my_collection')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcg_my_cards');
    }
};
