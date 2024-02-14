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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('username', 50)->index()->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('password')->nullable();
            $table->boolean('change_password')->default(false);
            $table->string('remember_token')->nullable();
            $table->string('bps_id', 9)->unique()->nullable();
            $table->string('employee_id', 19)->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();
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
