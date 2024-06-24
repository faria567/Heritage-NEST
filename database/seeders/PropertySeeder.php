<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    public function run()
    {
        Property::create([
            'title' => '3 BHK Builder Floor',
            'location' => 'Site Ram Bazar, Hyderabad',
            'price' => 300000,
            'bedrooms' => 2,
            'bathrooms' => 2,
            'balconies' => 2,
            'furnished' => true,
            'area' => 2000,
            'floor' => 2,
            'total_floors' => 6,
            'ready_to_move' => true,
            'facing' => 'North-East',
            'age_of_construction' => 1,
            'additional_rooms' => json_encode(['1 servant room', '1 guest room']),
            'amenities' => json_encode([
                'Power Back Up', 'Lift', 'Club House', 'Gymnasium', 'Park', 'Reserved Parking',
                'Security', 'Water Storage', 'Private Terrace/Garden', 'Vaastu Compliant', 'Service/Goods Lift',
                'Visitor Parking', 'Intercom Facility', 'Maintenance Staff', 'Waste Disposal', 'Laundry Service',
                'Internet/Wi-Fi Connectivity', 'DTH Television Facility', 'Piped Gas', 'Jogging and Strolling Track',
                'Outdoor Tennis Courts', 'Early Learning Centre', 'Kids Play Area', 'Indoor Squash & Badminton Courts'
            ])
        ]);
    }
}
