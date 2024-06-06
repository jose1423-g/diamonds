<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\qandans;
use App\Models\gallery;
use PhpParser\Node\Stmt\TryCatch;

class PostController extends Controller
{
    //get services
    public function GetServices () {
        try {
            $services = services::all();
            return view('services', ['all_services' => $services]);    
        } catch (\Throwable $th) {
            // dd("Error");
        }
        
    }

    public function GetQuestions () {
        try {
            $questions = qandans::all();
            return view('questions', ['all_questions' => $questions]);    
        } catch (\Throwable $th) {
            // dd("Error");
        }        
    }


    public function GetGallery () {
        try {
            $gallery = gallery::all();
            return view('gallery', ['gallery' => $gallery]);    
        } catch (\Throwable $th) {
            // dd("Error");
        }        
    }

}
