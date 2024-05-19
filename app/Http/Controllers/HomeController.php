<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'myValue' => 1
        ];
        
        return Inertia::render('app')->with($data);    
    }
}
