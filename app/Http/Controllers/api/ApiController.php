<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getData() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = $response->json();
        return view('./Api')->with('data', $data);
    }
}
