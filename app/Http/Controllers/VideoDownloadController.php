<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class VideoDownloadController extends Controller
{
    public function index()
    {
        return view('yt.download');
    }

    public function download(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);
    
        $videoUrl = $request->input('url');
        $storagePath = storage_path("app/public/videos");
    
        // Ensure the directory exists
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0777, true);
        }
    
        // Define the output filename
        $outputFile = $storagePath . "/%(title)s.%(ext)s";
    
        // Use yt-dlp to download
        $process = new Process(["yt-dlp", "-f", "best", "-o", $outputFile, $videoUrl]);
        $process->run();
    
        // Capture errors
        if (!$process->isSuccessful()) {
            return response()->json(['error' => 'Failed to download video: ' . $process->getErrorOutput()], 500);
        }
    
        // Find the downloaded file
        $downloadedFile = glob($storagePath . "/*.*")[0] ?? null;
    
        if (!$downloadedFile) {
            return response()->json(['error' => 'File not found after download.'], 500);
        }
    
        // Get only the filename (not full path)
        $fileName = basename($downloadedFile);
    
        // Create a downloadable link
        $fileUrl = asset("storage/videos/" . $fileName);
    
        return response()->json(['success' => true, 'fileUrl' => $fileUrl]);
    }
}
