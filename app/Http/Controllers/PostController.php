<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use PhpParser\Node\Stmt\TryCatch;

class PostController extends Controller
{
    //get services
    public function GetServices () {
        try {
            $services = services::all();
            return view('services', ['all_services' => $services]);    
        } catch (\Throwable $th) {
            dd("Error");
        }
        
    }

}
