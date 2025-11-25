<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('type');
            $table->string('location');
            $table->decimal('salary_min', 12, 2)->nullable();
            $table->decimal('salary_max', 12, 2)->nullable();
            $table->text('description');
            $table->json('responsibilities');
            $table->json('requirements');
            $table->json('benefits');
            $table->text('how_to_apply');
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamp('posted_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
