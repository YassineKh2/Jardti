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
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('title');                 // Course title
        $table->text('description')->nullable(); // Course description
        $table->string('pdf');   
        $table->string('audio')->nullable();                // PDF file path
        $table->foreignId('course_category_id')  // Foreign key for the category
              ->constrained('course_categories') // References 'id' on 'course_categories' table
              ->onDelete('cascade');             // Delete courses if the category is deleted
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
        Schema::dropIfExists('courses');
    }
};
