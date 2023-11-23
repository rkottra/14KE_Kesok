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
        Schema::create('my_students', function (Blueprint $table) {
            $table->id();
            $table->string("name", "100")->comment('Tanuló neve');
            $table->bigInteger("my_class_id")->unsigned();
            $table->timestamps();

            $table->foreign("my_class_id")->references("id")->on("my_classes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_students');
    }
};
