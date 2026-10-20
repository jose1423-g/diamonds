<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('info_company')->insert([
            'name_company' => 'Diamond’s Crown Transfers',
            'img_company' => 'logo_head.webp',
            'DESCRIPTION' => 'Empresa de la industria turística dedicada a ofrecer servicios de transportación en Cancún y sus alrededores. Contamos con todos los permisos federales, licencias y seguros requeridos para desempeñar nuestro servicio con confiabilidad y seguridad para su tranquilidad.',
            'mision' => 'Ofrecer un servicio de transportación personalizado para brindar tranquilidad y confianza a nuestros clientes nacionales e internacionales para que su primara impresión del destino turístico sea excelente y al mismo tiempo lo haga recomendable, dándole así más valor tanto a nuestro servicio como al destino.',
            'vision' => 'Ser una empresa altamente reconocida en el medio de la transportación turística por sus servicios personalizados, privados y confiables.',
            'facebook' => 'https://www.facebook.com/profile.php?id=61559022627314&mibextid=LQQJ4d&rdid=pmgKpACRrySCTlx5&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FptNegEeZb5S71o5S%2F%3Fmibextid%3DLQQJ4d',
            'instagram' => 'https://www.instagram.com/crown.diamonds/',
            'tiktok' => 'https://www.tripadvisor.com.mx/Attraction_Review-g150807-d27725652-Reviews-Diamond_s_Crown_Transfers-Cancun_Yucatan_Peninsula.html',
            'number1' => 'https://wa.me/9981212303',
            'number2' => 'https://wa.me/9981160588',
            'number3' => 'https://wa.me/9981430402',
            'img_head' => 'bg_playa.webp',
            'description_en' => 'Company in the tourism industry dedicated to offering transportation services in Cancun and its surroundings. We have all the federal permits, licenses and insurance required to perform our service with reliability and safety for your peace of mind.',
            'mision_en' => 'Offer a personalized transportation service to provide peace of mind and confidence to our national and international clients so that their first impression of the tourist destination is excellent and at the same time makes it recommendable, thus giving more value to both our service and the destination.',
            'vision_en' => 'To be a highly recognized company in the field of tourist transportation for its personalized, private and reliable services.',
        ]);
    }
}
