<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function manipulateImage()
    {
        // Check if the Imagick extension is available
        if (extension_loaded('imagick')) {
            // Create an Imagick object
            $image = new \Imagick('path_to_your_image.jpg');

            // Manipulate the image as needed
            $image->resizeImage(300, 300, \Imagick::FILTER_LANCZOS, 1);

            // Save the manipulated image
            $image->writeImage('path_to_save_resized_image.jpg');

            // Destroy the Imagick object to free up resources
            $image->destroy();
        } else {
            // Handle the case when Imagick extension is not available
            echo 'Imagick extension not available. Please install or enable it.';
        }
    }
}
