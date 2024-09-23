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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('symbol');
            $table->string('name')->nullable();
            $table->float('rate');
            $table->float('24h_volume')->nullable();
            $table->float('market_cap')->nullable();
            $table->float('change_24h')->nullable();
            $table->float('change_7d')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
