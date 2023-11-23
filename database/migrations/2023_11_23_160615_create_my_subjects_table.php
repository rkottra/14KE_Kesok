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
        Schema::create('my_subjects', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment("Tantárgy neve");
            $table->timestamps();
        });

        Schema::create('my_student_my_subject', function (Blueprint $table) {
            $table->bigInteger("my_student_id")->unsigned();
            $table->bigInteger("my_subject_id")->unsigned();

            $table->foreign("my_student_id")->references("id")->on("my_students");
            $table->foreign("my_subject_id")->references("id")->on("my_subjects");
            
            $table->primary(['my_student_id', 'my_subject_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_student_my_subject');
        Schema::dropIfExists('my_subjects');
    }
};
