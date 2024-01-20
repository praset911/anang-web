<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{
    public function index()
    {
        $response = Http::get('https://berita-indo-api-next.vercel.app/api/suara-news/tekno');
        $berita = $response->json()['data'];

        return View('index', compact('berita'));
    }
}
