<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AnalyticsController extends Controller
{
    public function checkAnalytics(Request $request)
{
    $url = $request->input('url');
    if (!$url) {
        return back()->with('error', 'Please enter a valid URL.');
    }

    $apiKey = env('PAGESPEED_API_KEY'); // API Key from .env
    // $apiUrl = "https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url={$url}&key={$apiKey}";
    $apiUrl = "https://www.googleapis.com/pagespeedonline/v5/runPagespeed?url={$url}&key={$apiKey}&category=performance&category=seo&category=best-practices";
    $client = new \GuzzleHttp\Client();
    $response = $client->get($apiUrl);
    $data = json_decode($response->getBody(), true);

    // Check if the required keys exist before accessing them
    $performanceScore = $data['lighthouseResult']['categories']['performance']['score'] ?? 'N/A';
    $seoScore = $data['lighthouseResult']['categories']['seo']['score'] ?? 'N/A';
    $bestPracticesScore = $data['lighthouseResult']['categories']['best-practices']['score'] ?? 'N/A';

    return view('analytics.result', compact('data', 'url', 'performanceScore', 'seoScore', 'bestPracticesScore'));
}

}
