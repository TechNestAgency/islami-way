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
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('course')->nullable();
            $table->text('message')->nullable();
            $table->integer('student_age')->nullable();
            $table->enum('student_gender',['male','female'])->nullable();
            $table->enum('teacher_gender',['male','female'])->nullable();
            $table->enum('package',['package1','package2','package3','package4','package5','package6'])->nullable();
            $table->text('days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
