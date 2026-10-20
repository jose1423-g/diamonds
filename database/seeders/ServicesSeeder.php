<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['icon' => 'airplane.webp', 'tittle' => 'Aeropuerto', 'description' => 'Al hospedaje ida y/o vuelta.', 'tittle_en' => 'Airport', 'description_en' => 'To the accommodation round trip.'],
            ['icon' => 'car.webp', 'tittle' => 'Cancún', 'description' => 'Cualquier zona de cancún ida y/o vuelta.', 'tittle_en' => 'Cancun', 'description_en' => 'Any area of ​​Cancun round trip.'],
            ['icon' => 'clock.webp', 'tittle' => 'Servicio de transportación', 'description' => 'Renta de transportacion por hora.', 'tittle_en' => 'Transportation service', 'description_en' => 'Transportation rental per hour.'],
            ['icon' => 'car.webp', 'tittle' => 'Tulúm', 'description' => 'Cualquier zona de tulúm ida y/o vuelta.', 'tittle_en' => 'Tulum', 'description_en' => 'Anywhere in Tulúm round trip.'],
            ['icon' => 'car.webp', 'tittle' => 'Riviera Maya', 'description' => 'Cualquier lugar de la riviera maya.', 'tittle_en' => 'Mayan Riviera', 'description_en' => 'Anywhere in the Mayan Riviera.'],
            ['icon' => 'car.webp', 'tittle' => 'Playa del carmen', 'description' => 'Cualquier lugar de playa del carmen ida y/o vuelta.', 'tittle_en' => 'Carmen beach', 'description_en' => 'Anywhere in Playa del Carmen round trip.'],
            ['icon' => 'car.webp', 'tittle' => 'Tour Chichén Itzá', 'description' => 'Incluye traslado a zona arqueológica, un cenote y Valladolid. No incluye entradas.', 'tittle_en' => 'Chichen Itza Tour', 'description_en' => 'Includes transfer to archaeological zone, a cenote and Valladolid. Does not include tickets.'],
        ];

        foreach ($rows as $row) {
            DB::table('services')->insert($row);
        }
    }
}
