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
        Schema::create('accepted_rewards', function (Blueprint $table) {
            $table->foreignId('username')->constrained(
                table: 'users', indexName: 'username'
            );
            $table->foreignId('rewards_id')->constrained(
                table: 'rewards', indexName: 'id'
            );
            $table->primary(['username', 'rewards_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_rewards');
    }
};
