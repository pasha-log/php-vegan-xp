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
        Schema::create('completed_vegan_actions', function (Blueprint $table) {
            $table->string('username');
            $table->foreign('username')->references('username')->on('users');
            $table->unsignedBigInteger('vegan_action_id'); // Use unsignedBigInteger to match 'id' data type
            $table->foreign('vegan_action_id')->references('id')->on('vegan_actions');
            $table->primary(['username', 'vegan_action_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_vegan_actions');
    }
};
