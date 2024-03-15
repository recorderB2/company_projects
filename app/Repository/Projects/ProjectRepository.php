<?php

namespace App\Repository\Projects;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectRepository implements ProjectInterface
{
    protected $projects;
    public function __construct(Project $projects)
    {
        $this->projects = $projects;
    }
    public function all()
    {
        return $this->projects::all();
    }
    public function store($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => $request->title,
            'body' => $request->body,
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store("projects");
        }
        $this->projects->create($data);
    }
    public function update($request, $project)
    {
        $edited = false;
        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];
        if ($request->title != $project->title) {
            $data['slug'] = $request->title;
            $edited = true;
        }
        if ($request->body != $project->body) {
            $edited = true;
        }
        if ($request->hasFile('image')) {
            $edited = true;
            if ($project->image) {
                Storage::delete($project->image);
            }
            $data['image'] = $request->image->store("projects");
        }
        $project->update($data);
        return $edited;
    }
    public function delete($project)
    {
        if ($project->image) {
            Storage::delete($project->image);
        }
        $project->delete();
    }
}
