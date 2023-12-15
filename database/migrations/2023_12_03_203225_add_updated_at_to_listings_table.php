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
            Schema::table('listings', function (Blueprint $table) {
                $table->timestamps(); // Этот метод добавит столбцы created_at и updated_at
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropTimestamps(); // Откат миграции, если необходимо
        });
    }
};
