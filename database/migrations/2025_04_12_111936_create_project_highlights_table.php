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
        Schema::create('project_highlights', function (Blueprint $table) {
            $table->id('project_highlights_id'); // Primary key
            $table->string('project_highlights_name', 100); // varchar(100) NOT NULL
            $table->timestamps(); // Optional: adds created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_highlights');
    }
};
