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
        Schema::create('post_reactions', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('post_id')->nullable();

            $table->string('type'); // like, dislike, sad, laugh
            // $table->foreignId('user_id')->constrained('users');
            $table->foreignId('user_id')->nullable();

            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_reactions');
    }
};
