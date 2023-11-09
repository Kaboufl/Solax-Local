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
        Schema::create('production_datas', function (Blueprint $table) {
            $table->id();
            $table->float('yield_today', 8, 2);
            $table->unsignedInteger('grid_power');
            $table->unsignedFloat('grid_voltage', 8, 2);
            $table->unsignedFloat('grid_current', 8, 2);
            $table->unsignedFloat('grid_freq', 8, 2);
            $table->unsignedInteger('pv1_power');
            $table->unsignedFloat('pv1_voltage', 8, 2);
            $table->unsignedFloat('pv1_current', 8, 2);
            $table->unsignedInteger('pv2_power');
            $table->unsignedFloat('pv2_voltage', 8, 2);
            $table->unsignedFloat('pv2_current', 8, 2);
            $table->timestamp('measured_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production_datas');
    }
};
