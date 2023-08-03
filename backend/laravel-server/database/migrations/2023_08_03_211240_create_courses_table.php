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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->bigInteger('teacher_id');
            $table->bigInteger('enrollment_limit');
            $table->bigInteger('number_of_assignments');
            $table->bigInteger('number_of_quizzes');
            $table->bigInteger('number_of_sessions');
            $table->date('start_at');
            $table->date('end_at');
            $table->string('meeting_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
