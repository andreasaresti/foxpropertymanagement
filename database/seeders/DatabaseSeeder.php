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
    }
}
