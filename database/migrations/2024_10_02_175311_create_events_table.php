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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->dateTime('start_date'); 
            $table->dateTime('end_date'); 
            $table->string('location')->nullable();
            $table->integer('capacity')->nullable(); 
            $table->decimal('price', 8, 2)->nullable(); 
            $table->string('image_path')->nullable(); 
            $table->boolean('has_delay')->default(false); 
            $table->foreignId('category_id')->constrained('event_categories')->onDelete('cascade');

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
