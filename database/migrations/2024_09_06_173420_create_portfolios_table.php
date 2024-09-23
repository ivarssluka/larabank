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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('symbol');
            $table->string('name');
            $table->float('current_price');
            $table->float('bought_at');
            $table->float('amount_bought');
            $table->float('current_value');
            $table->float('change_24h');
            $table->float('change_7d');
            $table->float('change_30d');
            $table->float('change_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
