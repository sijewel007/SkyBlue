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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('serial')->nullable();
            $table->string('card')->nullable();
            $table->string('username')->nullable();

            $table->string('password')->nullable();
            $table->string('share')->nullable();
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('spouse')->nullable();

            $table->string('nid')->nullable();
            $table->string('birth')->nullable();
            $table->string('profession')->nullable();

            $table->string('working_station')->nullable();
            $table->string('position')->nullable();
            $table->string('cell')->nullable();
            $table->string('email')->nullable();

            $table->string('blood_group')->nullable();
            $table->string('religious')->nullable();
            $table->string('present_address')->nullable();

            $table->string('permanent_address')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();

            $table->string('description')->nullable();
            $table->string('amount')->nullable();
            $table->string('deposit_date')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
