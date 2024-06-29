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
        Schema::create('user_posts',function (Blueprint $table){
            $table->id();
            $table->foreignId('profile_id')->constrained('profile_users')->onDelete('cascade');
            $table->string('caption');
            $table->string('media_url')->nullable();
            $table->integer('shared_count')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_posts');
    }
};
