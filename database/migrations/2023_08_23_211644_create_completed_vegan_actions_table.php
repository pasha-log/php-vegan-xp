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
            $table->string('username'); // Same data type as the primary key in 'users'
            $table->foreign('username')->references('username')->on('users');
            
            // Reference the 'id' column in 'vegan_actions' (assuming it's an unsigned big integer)
            $table->integer('vegan_action_id')->unsigned();
            $table->foreign('vegan_action_id')->references('id')->on('vegan_actions');
            
            $table->timestamps();
            
            // Define the primary key as a combination of 'username' and 'vegan_action_id'
            $table->primary(['username', 'vegan_action_id']);
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

