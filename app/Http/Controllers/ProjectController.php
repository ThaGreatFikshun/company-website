<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $ongoingProjects = Project::where('status', 'ongoing')->get();
        $pendingProjects = Project::where('status', 'pending')->get();
        $completedProjects = Project::where('status', 'completed')->get();

        return view('profile', compact('ongoingProjects', 'pendingProjects', 'completedProjects'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        Project::create($request->all());

        return redirect()->route('profile')->with('success', 'Project created successfully.');
    }
}
