<?php
use App\Models\qandans;
use App\Models\info_company;
use App\Models\services;

$a_data_question = [];
$a_data_company = [];
$a_data_services = [];

$a_questions = qandans::select('question', 'answer', 'question_en', 'answer_en')->get();
foreach($a_questions as $row){    
    $a_data_question[$row->question] = $row->question_en;
    $a_data_question[$row->answer] = $row->answer_en;
}

$a_info_company = info_company::select('DESCRIPTION', 'mision', 'vision', 'description_en', 'mision_en', 'vision_en')->get();
foreach($a_info_company as $row){
    $a_data_company[$row->DESCRIPTION] = $row->description_en;
    $a_data_company[$row->mision] = $row->mision_en;
    $a_data_company[$row->vision] = $row->vision_en;
}

$a_services = services::select('tittle', 'description', 'tittle_en', 'description_en')->get();
foreach($a_services as $row){
    $a_data_services[$row->tittle] = $row->tittle_en;
    $a_data_services[$row->description] = $row->description_en;
}

return array_merge([
    'Inicio' => 'Home',
    'Servicios' => 'Services',
    'Acerca de' => 'About',
    'Galería' => 'Gallery',
    'Preguntas Frecuentes' => 'FAQ’s',
    'Contáctanos' => 'Contact us',
    'Ver todos los servicios' => 'View all services',
    'Ver todas las preguntas' => 'View all questions',    
    'Ingles' => 'English',
    'Español' => 'Spanish',
    'Nuestros Servicios' => 'Our services',
    'En' => 'At',
    'nos preocupamos en ofrecer servicio de transporte turístico, poniendo  especial atención en la seguridad, puntualidad,  y atención a sus requerimientos. Desde traslados aeropuerto - hotel - aeropuerto, hasta transporte a cualquier lugar de la Riviera Maya.' => 'We care about offering tourist transportation service, paying special attention to safety, punctuality, and attention to your requirements. From airport - hotel - airport transfers, to transportation to any place in the Riviera Maya.',    
    'Para más información' => 'For more information',
    'Misión' => 'Mission',
    'Visión' => 'Vision',
    'Reservados todos los derechos' => 'All Rights Reserved',
    'Siguenos en redes sociales' => 'Follow us on social networks'

],
$a_data_question,
$a_data_company,
$a_data_services,
);