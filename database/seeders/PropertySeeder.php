<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        DB::table('properties')->insert([
            [
                'title' => '3 BHK Builder Floor for Sale in Site Ram Bazar',
                'location' => 'Meadowshire Park, Greenfield, USA',
                'price' => 300000,
                'description' => 'A beautiful 3 BHK builder floor located in Site Ram Bazar with all modern amenities.',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'balconies' => 2,
                'floor' => 2,
                'area' => 2000,
                'facing' => 'North - East',
                'age' => 'New Construction',
                'amenities' => json_encode([
                    'Power Back Up', 'Lift', 'Club House', 'Gymnasium', 'Park', 'Reserved Parking', 
                    'Security', 'Water Storage', 'Private Terrace/Garden', 'Vaastu Compliant', 
                    'Service/Goods Lift', 'Visitor Parking', 'Intercom Facility', 'Maintenance Staff', 
                    'Waste Disposal', 'Laundry Service', 'Internet/Wi-Fi Connectivity', 
                    'DTH Television Facility', 'Piped Gas', 'Jogging and Strolling Track', 
                    'Outdoor Tennis Courts', 'Early Learning Centre', 'Kids Play Area', 
                    'Indoor Squash & Badminton Courts'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more properties here if needed
        ]);
    }
}
