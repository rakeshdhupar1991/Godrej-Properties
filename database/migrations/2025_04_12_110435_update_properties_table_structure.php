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
        Schema::table('properties', function (Blueprint $table) {
            // Drop old columns
            $table->dropColumn([
                'image_url', 'address_1', 'address_2', 'state', 'country', 'pincode',
                'latitude', 'longitude', 'sqft', 'rooms', 'washrooms', 'bhk',
                'location', 'buy_or_sale', 'name'
            ]);

            // Rename columns
            $table->renameColumn('property_type', 'property_type_old'); // temp rename if name conflict

            // Modify and add new columns
            $table->string('project_name', 100)->after('id');
            $table->unsignedBigInteger('configuration')->after('project_name');
            $table->string('city', 50)->change();
            $table->decimal('price', 20, 0)->change();
            $table->integer('area')->after('price');
            $table->string('address', 250)->after('area');
            $table->string('description', 1000)->change();
            $table->enum('possession', ['New Launch', 'Under Construction', 'Ready to Move'])->after('description');
            $table->unsignedBigInteger('amenities')->after('property_type');
            $table->unsignedBigInteger('gallery')->after('amenities');
            $table->unsignedBigInteger('project_highlights')->after('gallery');
            $table->unsignedBigInteger('location_advantages')->after('project_highlights');
            $table->unsignedBigInteger('faqs')->after('location_advantages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            // Revert changes (optional depending on your needs)
        });
    }
};
