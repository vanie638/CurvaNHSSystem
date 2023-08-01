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
        Schema::create('forms', function (Blueprint $table) {
            $table->id('form_id');
            $table->unsignedBigInteger('user_id');
            $table->date('form_request_date');
            $table->string('form_status');
            $table->text('form_content');
            $table->text('rejection_reason')->nullable();
            $table->string('academic_year');
            $table->string('course_program');
            $table->date('form_release_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
