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
            $table->string('username'); // Same data type as the primary key in 'users'
            $table->foreign('username')->references('username')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            
            // Reference the 'id' column in 'vegan_actions' (assuming it's an unsigned big integer)
            $table->integer('reward_id')->unsigned();
            $table->foreign('reward_id')->references('id')->on('rewards');
            
            $table->timestamps();
            
            // Define the primary key as a combination of 'username' and 'vegan_action_id'
            $table->primary(['username', 'reward_id']);
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
