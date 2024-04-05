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
        Schema::create('cuptypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->integer('capacity');
            $table->tinyInteger('type')->comment('1 - na ciepłe, 2 - na zimne, 3 - zimne bez wieczka');
            $table->text('image_path');
            $table->float('price');
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuptypes');
    }
};
