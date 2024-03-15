<?php

namespace App\Repository\Projects;

interface ProjectInterface
{
    public function all();
    public function store($request);
    public function update($request, $project);
    public function delete($project);
}
