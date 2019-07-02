<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;

class ProjectsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        auth()->id(); // 4 
        auth()->user(); //user 
        auth()->check(); // boolean 
        auth()->guest(); // 


        $projects = Project::all();

        $project = Project::where('owener_id', auth()->id())->get();
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

        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:3', 'max:250']
        ]);

        Project::create($attributes + ['owener_id' => auth()->id()]);
        //Project::create(request(['title', 'description']));

        return redirect('/projects');
    }





    public function show(Project $project, Twitter $twitter)
    {
        dd($twitter);

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
