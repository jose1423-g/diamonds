<?php

use App\Models\qandans;
use App\Models\info_company;
use App\Models\services;

$a_data_question = [];
$a_data_company = [];
$a_data_services = [];


$a_questions = qandans::all();
foreach($a_questions as $row){
    $a_data_question[$row->question] = $row->question;
}

$a_info_company = info_company::select('DESCRIPTION', 'mision', 'vision')->get();
foreach($a_info_company as $row){
    $a_data_company[$row->DESCRIPTION] = $row->DESCRIPTION;
    $a_data_company[$row->mision] = $row->mision;
    $a_data_company[$row->vision] = $row->vision;
}

$a_services = services::select('tittle', 'description')->get();
foreach($a_services as $row){
    $a_data_services[$row->tittle] = $row->tittle;
    $a_data_services[$row->description] = $row->description;
}

return array_merge([
    'Inicio' => 'Inicio',
    'Servicios' => 'Servicios',
    'Acerca de' => 'Acerca de',
    'Galería' => 'Galería',
    'Preguntas Frecuentes' => 'Preguntas Frecuentes',
    'Contáctanos' => 'Contáctanos',    
    'Ver todos los servicios' => 'Ver todos los servicios',
    'Ver todas las preguntas' => 'Ver todas las preguntas',
    'Ingles' => 'Ingles',
    'Español' => 'Español',
    'Nuestros Servicios' => 'Nuestros Servicios',
    'En' => 'En',
    'nos preocupamos en ofrecer servicio de transporte turístico, poniendo  especial atención en la seguridad, puntualidad,  y atención a sus requerimientos. Desde traslados aeropuerto - hotel - aeropuerto, hasta transporte a cualquier lugar de la Riviera Maya.' => 'nos preocupamos en ofrecer servicio de transporte turístico, poniendo  especial atención en la seguridad, puntualidad,  y atención a sus requerimientos. Desde traslados aeropuerto - hotel - aeropuerto, hasta transporte a cualquier lugar de la Riviera Maya.',    
    'Para más información' => 'Para más información',
    'Misión' => 'Misión',
    'Visión' => 'Visión',
    'Reservados todos los derechos' => 'Reservados todos los derechos',
    'Siguenos en redes sociales' => 'Siguenos en redes sociales'
], 
$a_data_question,
$a_data_company,
$a_data_services,
);
