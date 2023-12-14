<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request - Checking if the 'body' field is required
        $request->validate([
            'body' => 'required',
        ]);

        // Retrieve all inputs from the request
        $input = $request->all();

        // Add the authenticated user's ID to the input array
        $input['user_id'] = auth()->user()->id;

        // Create a new comment using the Comment model and the input data
        Comment::create($input);

        // Redirect back to the previous page after creating the comment
        return back();
    }
}
