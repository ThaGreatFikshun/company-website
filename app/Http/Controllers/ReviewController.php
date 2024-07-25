<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'review' => $request->review,
        ]);

        return back()->with('success', 'Review submitted successfully.');
    }
}
