<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the contact inquiry in the database or send an email
        // ...

        return back()->with('success', 'Your message has been sent!');
    }
}
