<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('err_logs', function (Blueprint $table) {
            $table->id();
            $table->text('message')->nullable();
            $table->string('channel')->nullable();
            $table->integer('level')->default(0);
            $table->string('level_name', 20);
            $table->integer('unix_time');
            $table->text('datetime')->nullable();
            $table->longText('context')->nullable();
            $table->text('extra')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('err_logs');
    }
};
