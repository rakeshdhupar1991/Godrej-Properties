<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'configuration_name' => '2 BHK',
            'configuration_price' => 5500000
        ]);

        Configuration::create([
            'configuration_name' => '3 BHK',
            'configuration_price' => 7500000
        ]);
    }
}
