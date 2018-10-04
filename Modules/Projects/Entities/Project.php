<?php

namespace Modules\Projects\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name'];



    public function tasks()
    {
        return $this->hasMany('Modules\Projects\Entities\Task');
    }

}
