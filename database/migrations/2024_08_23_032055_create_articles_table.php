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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('excerpt');
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('event_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('image')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->default(2);
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
