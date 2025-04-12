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
        Schema::create('location_advantages', function (Blueprint $table) {
            $table->id('location_advantages_id'); // Primary key
            $table->string('location_advantages_name', 150); // varchar(150) NOT NULL
            $table->timestamps(); // Optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_advantages');
    }
};
