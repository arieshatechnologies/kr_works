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
        Schema::create('supplierdetails', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("address"); // Allows longer addresses
            $table->string("phone_no", 20); // Limited to 20 characters
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplierdetails');
    }
};
