<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    //

    // public function update(Task $task)
    // {

    //     //$task->complete(request()->has('completed'));



    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     // ]);

    //     // if(request()->has('completed')){
    //     //     $task->complete();
    //     // }else{
    //     //     $task->incomplete();
    //     // }

    //     //request()->has('completed') ? $task->complete():$task->incomplete();

    //     $method = request()->has('completed') ? 'complete' : 'incomplete';

    //     $task->$method();







    //     return back();
    // }

    public function store(Project $project)
    {
        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description')
        // ]);

        // $attributes = request()->validate(['description' => 'required']);
        // $project->addTask($attributes);

        //$project->tasks()->create(request());

        $project->addTask(

            request()->validate(['description' => 'required'])
        );

        return back();
    }
}
