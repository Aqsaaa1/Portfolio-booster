<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('template_id');
            $table->string('name');
            $table->string('title');
            $table->text('bio');
            $table->string('about_title')->nullable();
            $table->text('about_description')->nullable();
            $table->json('skills')->nullable();
            $table->json('services')->nullable();
            $table->json('projects')->nullable();
            $table->string('profile_image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
