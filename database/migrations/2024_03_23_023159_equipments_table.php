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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('serial_number');
            $table->string('model');
            $table->string('manufacturer');
            $table->string('purchase_date');
            $table->string('purchase_price', 10, 2);
            $table->string('warranty_expiration_date');
            $table->string('location');
            $table->string('assigned_to');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
