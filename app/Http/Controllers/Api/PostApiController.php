<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class PostApiController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return response()->json($response->json());
    }

    public function show($id)
    {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/{$id}");
        return response()->json($response->json());
    }
}

