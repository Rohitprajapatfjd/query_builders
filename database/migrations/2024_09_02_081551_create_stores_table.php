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
         if(!Schema::hasTable('stores')){
            Schema::create('stores', function (Blueprint $table) {
                $table->id();
                $table->string('category')->comment('random item')->nullable();
                $table->integer('items')->unsigned()->default(0);
                if(!Schema::hasColumn('stores','status')){
                    $table->boolean('status')->default(0);
                }
                
                $table->timestamps();
            });
         }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
