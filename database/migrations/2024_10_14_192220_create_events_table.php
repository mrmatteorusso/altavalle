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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('starting_time');
            $table->string('finishing_time');
            $table->string('cover');
            $table->boolean('is_new')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->string('short_description');
            $table->string('long_description');
            $table->date('event_date');
            $table->string('location');
            $table->string('tag');
            $table->string('area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
