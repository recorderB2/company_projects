<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Repository\Projects\ProjectInterface;
use App\Models\Project;

class ProjectController extends Controller
{
    protected $projectInterface;
    public function __construct(ProjectInterface $projectInterface)
    {
        $this->projectInterface = $projectInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = $this->projectInterface->all();
        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $this->projectInterface->store($request);
        return back()->with('success', 'The Project: (' . $request->title . ') Has Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('dashboard.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $edited = $this->projectInterface->update($request, $project);
        if ($edited) {
            return redirect(route('dashboard.projects.show', $project))->with(['success' => 'Update Successfully']);
        } else {
            return back()->with('warn', 'Nothing Has Changed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $this->projectInterface->delete($project);
        return redirect('dashboard/projects');
    }
}
