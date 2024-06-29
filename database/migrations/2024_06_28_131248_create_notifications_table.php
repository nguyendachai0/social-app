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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_user_id')->constrained('profile_users')->onDelete('cascade');
            $table->enum('type', ['message', 'share', 'friend_request']);
            $table->unsignedBigInteger('reference_id');
            $table->enum('status', ['new', 'read'])->default('new');
            $table->timestamps();
            $table->index(['type', 'reference_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
