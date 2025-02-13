<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GeminiAPI\Laravel\Facades\Gemini;


class BlogController extends Controller
{

     // Display the blog creation form
     public function create()
     {
         return view('blog.index');  // Your Blade file for the form
     }
 
     // Handle blog generation
     public function generate(Request $request)
     {
         // Validate the incoming request
         $request->validate([
             'title' => 'required|string|max:255',
             'focus_keyword' => 'required|string|max:255', // Add validation for the focus keyword
         ]);
 
         // Retrieve the input data
         $title = $request->input('title');
         $focusKeyword = $request->input('focus_keyword');
 
         try {
             // Generate content using Gemini API
             // Including both title and focus keyword in the request for more tailored content
             $content = Gemini::generateText(
                 'Write a blog on "' . $title . '" that focuses on the keyword "' . $focusKeyword . '". ' .
                 'Structure the blog with headings <h1>, <h2>, <p>, and <strong> for bold text. ' .
                 'Ensure key phrases and important sections are highlighted in <strong>bold</strong>, ' .
                 'and break the content into readable paragraphs with appropriate line breaks.'
             );
 
             // Return the generated content to a view for display
             return view('blog.result', compact('title', 'content'));
 
         } catch (\Exception $e) {
             // Handle any errors from the Gemini API
             return back()->withErrors(['error' => 'Error generating blog: ' . $e->getMessage()]);
         }
     }
}
