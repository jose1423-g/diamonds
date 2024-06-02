<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\services;
use App\Models\info_company;
use App\Models\qandans;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //retorna los datos de las tablas a todas las vistas
        try {                   
            $services =  services::take(3)->get();
            $info_company = info_company::all();
            $questions =  qandans::take(3)->get();
            
            View::share([
                'services' => $services,
                'info_company' => $info_company,
                'questions' => $questions,                
            ]);                
        } catch (\Throwable $th) {            
            dd("Error");
        }
    }
}
