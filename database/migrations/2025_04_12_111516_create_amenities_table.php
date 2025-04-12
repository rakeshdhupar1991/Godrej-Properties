<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id('amenity_id'); // same as int(11) NOT NULL and PRIMARY KEY
            $table->string('amenities_name', 50);
            $table->timestamps(); // optional: adds created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('amenities');
    }
};
