<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChartsController extends Controller
{
    public function showDashboard(Request $request)
    {
        // Perform any necessary authentication or authorization checks here

        // Forward the request to the Superset instance
        // $url = 'https://localhost:8888/'; // Replace with your Superset's HTTP URL
        // $response = Http::get($url . $request->getRequestUri());

        $url = 'http://192.168.1.8:8888'; // Replace with your Superset's HTTPS URL
        $response = Http::withOptions(['verify' => false])->get($url . $request->getRequestUri());

        return $response;
    }
}
