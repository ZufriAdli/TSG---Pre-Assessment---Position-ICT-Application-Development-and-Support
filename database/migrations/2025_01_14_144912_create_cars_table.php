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
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Car name
            $table->unsignedBigInteger('manufacture_id'); // Foreign key
            $table->timestamp('date_created')->useCurrent(); // Timestamp
            $table->timestamps(); // Created_at and updated_at timestamps

            // Foreign key constraint
            $table->foreign('manufacture_id')
                  ->references('id')
                  ->on('manufactures')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
