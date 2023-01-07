<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('message');
            $table->string('student_university_id');
            $table->string('student_name');
            $table->string('student_email');
            $table->string('image')->nullable();
            $table->string('response')->nullable();
            $table->enum('type', ['Complaint','Suggestion']);
            $table->enum('status', ['Open','Closed'])->default('Closed');
            $table->boolean('urgent')->default(0)->change();
            $table->timestamp('closed_date')->nullable();
            $table->string('report number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
