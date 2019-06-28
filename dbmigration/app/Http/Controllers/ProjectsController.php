<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //

    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }


    

    public function create()
    {
        return view('projects.create');
    }




    public function store()
    {
        // using 3 way you can set data on database 

        // $project = new Project();
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        //Project::create(request()->all());

        // Project::create([
        //     'title'=>request('title'),
        //     'description'=>request('description')
        // ]);

        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }




    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }




    public function update(Project $project)
    {

        // 2 way for update database

        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }




    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }




    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
}
