<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Post; // Check if the namespace is correct
use Illuminate\Support\Facades\View;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Fetch the necessary data to pass to the view (if needed)
        $posts = Post::all(); // Replace with your actual data retrieval logic

        // Get the HTML content from the Blade view and pass the retrieved data
        $html = View::make('blog.index', ['posts' => $posts])->render();



        // Generate the PDF with Dompdf
        $pdf = PDF::loadHTML($html);

        // Set paper size and orientation if needed
        // $pdf->setPaper('A4', 'landscape');

        // Return the PDF file for download or display
        return $pdf->stream('document.pdf');
    }
}


