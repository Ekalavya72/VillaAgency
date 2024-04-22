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
        Schema::create('schedule_visits', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName')->nullable();
            $table->string('LastName')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->date('VisitDate')->nullable();
            $table->string('PurposeofVisit')->nullable();
            $table->longText('Message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_visits');
    }
};
