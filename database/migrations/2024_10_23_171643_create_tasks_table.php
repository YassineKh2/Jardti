<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', ['to do', 'doing', 'done'])->default('to do');
            $table->date('dueDate');
            $table->unsignedBigInteger('plant_id')->nullable(); // Plant ID can be null for general tasks
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('plant_id')->references('id')->on('plants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
