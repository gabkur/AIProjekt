<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $services = [
            ['name' => 'Czyszczenie zębów', 'price' => 100.00, 'image' => null],
            ['name' => 'Wybielanie zębów', 'price' => 200.00, 'image' => null],
            ['name' => 'Leczenie kanałowe', 'price' => 300.00, 'image' => null],
            ['name' => 'Usuwanie zębów', 'price' => 150.00, 'image' => null],
            ['name' => 'Zakładanie koron', 'price' => 400.00, 'image' => null],
            ['name' => 'Zakładanie mostów', 'price' => 500.00, 'image' => null],
            ['name' => 'Zakładanie protez', 'price' => 600.00, 'image' => null],
            
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
