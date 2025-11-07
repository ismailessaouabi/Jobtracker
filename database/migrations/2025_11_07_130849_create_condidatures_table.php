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
        Schema::create('condidatures', function (Blueprint $table) {
            $table->id();
            $table->string('titre_offre');
            $table->text('description_offre');
            $table->string('email_entreprise');
            $table->string('status')->default('en attente');
            $table->string('lien_offre')->nullable();
            $table->string('type_offre')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condidatures');
    }
};
