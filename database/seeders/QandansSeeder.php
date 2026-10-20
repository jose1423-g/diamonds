<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QandansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['question' => '¿Que tipo de vehículos se utilizan?', 'answer' => 'Toyota Sienna y Toyota Hiace.', 'question_en' => 'What type of vehicles do you use?', 'answer_en' => 'Toyota Sienna & Toyota Hiace'],
            ['question' => '¿El servicio de transporte es privado?', 'answer' => 'Nuestros servicios son 100% privados.', 'question_en' => 'Is the transportation service private?', 'answer_en' => 'Yes, our services are 100% private.'],
            ['question' => '¿Que precios manejan de sus servicios?', 'answer' => 'Los precios se les proporcionarán al comunicarse con nosotros, ya que varían de acuerdo al lugar a donde serán transportados y al número de pasajeros.', 'question_en' => 'What prices do you have for your services?', 'answer_en' => 'Prices will be provided when you contact us, as they vary according to the place where they will be transported and the number of passengers.'],
            ['question' => '¿Se dan servicios de traslados y/o tours?', 'answer' => 'Claro, realizamos servicios de traslados para eventos, salidas a restaurantes o algún lugar de la zona, tours a zonas arqueológicas y sitios populares del destino para más información contáctanos.', 'question_en' => 'Are transfer services and/or tours provided?', 'answer_en' => 'Of course, we provide transfer services for events, trips to restaurants or somewhere in the area, tours to archaeological sites and popular sites in the destination. For more information, contact us.'],
            ['question' => '¿Cuanto tardan los servicios de transportación al lugar de destino?', 'answer' => 'Dependerá del lugar al que se trasladen, el día y hora del servicio y demás factores comunes de las carreteras. De igual manera, al reservar con nosotros y tener su servicio específico, se les podrá brindar horarios más precisos de su viaje.', 'question_en' => 'How long do transportation services take to the destination?', 'answer_en' => 'It will depend on the place to which they travel, the day and time of the service and other common road factors. Likewise, by booking with us and having your specific service, we can provide you with more precise schedules of your trip.'],
            ['question' => '¿Como y cuando debo pagar el servicio?', 'answer' => 'El pago podrá ser en efectivo o por transferencia bancaria a la cuenta de la empresa. La reserva se podrá realizar con nosotros sin cargo alguno. El pago/cargo puede realizarse antes o hasta el momento en el que se proporcione el servicio.', 'question_en' => 'How and when should I pay for the service?', 'answer_en' => 'Payment may be in cash or by bank transfer to the company account. The reservation can be made with us without any charge. Payment/charge may be made before or up to the time the service is provided.'],
        ];

        foreach ($rows as $row) {
            DB::table('qandans')->insert($row);
        }
    }
}
