<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('property_types')->insert([
            'name'=> "Common Expenses"
        ]);
        DB::table('property_types')->insert([
            'name'=> "Rent"
        ]);
        DB::table('property_types')->insert([
            'name'=> "Owner Properties"
        ]);
        DB::table('users')->insert([
            'name' => 'Andreas Aresti',
            'email' => 'a.aresti@fosetico.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('buildings')->insert([
            'name' => 'Building 1 goes here',
            'construction_year' => '1980',
            'country' => 'CY',
            'city' => 'Limassol',
            'country' => 'CY',
        ]);
        DB::table('buildings')->insert([
            'name' => 'Building 2 goes here',
            'construction_year' => '1980',
            'country' => 'CY',
            'city' => 'Nicosia',
            'country' => 'CY',
        ]);
        DB::table('units')->insert([
            'building_id' => '1',
            'number' => '101',
            'floor' => '1',
            'apartment_type' => 'basement',
            'internal_sq_meters' => '100',
            'covered_venanda' => '110',
            'uncovered_vananda' => '50',
            'mezanee' => '30',
            'other' => '40',
            'payable_area' => '100',
            'committe' => 'no',
        ]);
        DB::table('units')->insert([
            'building_id' => '1',
            'number' => '201',
            'floor' => '2',
            'apartment_type' => 'floor',
            'internal_sq_meters' => '100',
            'covered_venanda' => '110',
            'uncovered_vananda' => '50',
            'mezanee' => '30',
            'other' => '40',
            'payable_area' => '100',
            'committe' => 'president',
        ]);

        /*
Number::make("Number", "number")->required(),
            Text::make("Floor", "floor"),
            Select::make("Apartment Type", "apartment_type")
                ->options([
                    'basement'=> "Basement",
                    "group_floor"=> "Group Floor",
                    "floor"=> "Floor",
                    "penthouse"=> "Penthouse"
                ]),
            Number::make("Internal Sq Meters", "internal_sq_meters"),
            Number::make("Covered Venanda", "covered_venanda"),
            Number::make("Uncovered Vananda", "uncovered_vananda"),
            Number::make("Mezanee", "mezanee"),
            Text::make("Payable Area", "payable_area"),
            Number::make("Owner Percentage", "owner_percentage"),
            Select::make("Committe", "committe")
                ->options([
                    'no'=> "No",
                    "president"=> "President",
                    "member"=> "Member",
                ])->required(),
        ];
        */
    }
}
