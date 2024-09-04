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
        Schema::create('adduser', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',240)->nullable();
            $table->string('email',255)->unique()->nullable()->comment('Email Nullable');
            $table->float('phoneno',50)->nullable();
            $table->unsignedInteger('age');
            $table->string('city',210)->nullable();
            $table->timestamp('time')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adduser');
    }
};
