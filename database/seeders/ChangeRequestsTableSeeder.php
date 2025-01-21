<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChangeRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('change_requests')->insert([
            [
                'title' => 'Update Country Currency Codes',
                'description' => 'Updating outdated currency information.',
                'status' => 'approved',
                'user_id' => 1, // User ID from the users table
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Update US States Information',
                'description' => 'Updating state capitals and population data.',
                'status' => 'pending',
                'user_id' => 2, // User ID from the users table
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Add New Cities to California',
                'description' => 'Adding newly incorporated cities.',
                'status' => 'rejected',
                'user_id' => 3, // User ID from the users table
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}

