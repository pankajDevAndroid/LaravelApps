<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class Task extends Model
{
    //


    protected $guarded = [];

    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }


    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
}
