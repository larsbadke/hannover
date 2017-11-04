<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function show(Project $project)
    {
        return view('project.show')
            ->with(compact('project'));
    }
}
