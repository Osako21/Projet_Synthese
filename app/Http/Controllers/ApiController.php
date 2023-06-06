<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'age' => 30,
        ];
    
        return response()->json($data);
    }
}
