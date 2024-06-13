<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DentistsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dentists')->delete(); 

        $dentists = [
            ['name' => 'Dr. Smith', 'specialization' => 'Orthodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Brown', 'specialization' => 'Periodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. White', 'specialization' => 'Endodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Green', 'specialization' => 'Prosthodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Black', 'specialization' => 'Pediatric Dentist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Blue', 'specialization' => 'General Dentist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Red', 'specialization' => 'Cosmetic Dentist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Yellow', 'specialization' => 'Oral Surgeon', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Purple', 'specialization' => 'Periodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dr. Orange', 'specialization' => 'Orthodontist', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('dentists')->insert($dentists);
    }
}

