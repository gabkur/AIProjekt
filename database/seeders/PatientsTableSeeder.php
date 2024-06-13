<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('patients')->delete(); 

        $patients = [
            ['name' => 'Jan Kowalski', 'email' => 'jan.kowalski1@example.com', 'phone' => '123456789', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Anna Nowak', 'email' => 'anna.nowak@example.com', 'phone' => '987654321', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Piotr Zieliński', 'email' => 'piotr.zielinski@example.com', 'phone' => '111222333', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Marta Wiśniewska', 'email' => 'marta.wisniewska@example.com', 'phone' => '444555666', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Krzysztof Wójcik', 'email' => 'krzysztof.wojcik@example.com', 'phone' => '777888999', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Agnieszka Kowal', 'email' => 'agnieszka.kowal@example.com', 'phone' => '101010101', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Tomasz Nowicki', 'email' => 'tomasz.nowicki@example.com', 'phone' => '202020202', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Barbara Lewandowska', 'email' => 'barbara.lewandowska@example.com', 'phone' => '303030303', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Andrzej Zielonka', 'email' => 'andrzej.zielonka@example.com', 'phone' => '404040404', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Katarzyna Malinowska', 'email' => 'katarzyna.malinowska@example.com', 'phone' => '505050505', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        DB::table('patients')->insert($patients);
    }
}
