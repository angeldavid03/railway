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
        Schema::table('horarios', function (Blueprint $table) {
            $table->foreign(['nombre_emp'], 'horarios_ibfk_1')->references(['nombre'])->on('empleados')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('horarios', function (Blueprint $table) {
            $table->dropForeign('horarios_ibfk_1');
        });
    }
};
