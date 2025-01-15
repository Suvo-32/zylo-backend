<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone', 15)->nullable();
            $table->text('address')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
