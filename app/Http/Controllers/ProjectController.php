<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('home', compact('projects'));
    }
    public function show(Project $project)
    {
        return view('project', compact('project'));
    }
}
