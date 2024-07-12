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
        Schema::create('manage_permissions', function (Blueprint $table) {
           $table->id();
           $table->integer('permission_group_id');
           $table->string('permission_name');
           $table->string('permission_key');
           $table->timestamps();
           $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manage_permissions');
    }
};
