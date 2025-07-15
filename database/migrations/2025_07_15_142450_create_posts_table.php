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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->string('type')->default('audio');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();

            //postEmojisCount
            $table->string('dislikeCount')->default(0);
            $table->string('clownCount')->default(0);
            $table->string('poopCount')->default(0);
            $table->string('bloatCount')->default(0);
            $table->string('skullCount')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
