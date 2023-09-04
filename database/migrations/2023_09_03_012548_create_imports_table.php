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
        Schema::create('imports', function (Blueprint $table)
        {
            $table->id();
            $table->string("username")->nullable();
            $table->float("user_id")->nullable();
            $table->string("access_hash")->nullable();
            $table->string("name")->nullable();
            $table->string("group_name")->nullable();
            $table->float("group_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};
