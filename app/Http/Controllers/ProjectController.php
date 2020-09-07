<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['show', 'index']);
    }

    public function index()
    {
        \SEO::setTitle("AgroSword - Projects");
        return view('projects.index', ['projects' => Project::all()]);
    }

    public function show(Project $project)
    {
        \SEO::setTitle("AgroSword - {$project->name}");
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        \SEO::setTitle("AgroSword - Edit Project");
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'interest_rate' => 'required|numeric',
            'duration' => 'required|numeric',
            'amount_per_stock' => 'required|numeric'
        ]);

        $project->update($request->all());

        return back()->with('status', 'Project updated succesfully!');
    }
}
