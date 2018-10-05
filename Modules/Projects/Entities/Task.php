<?php

namespace Modules\Projects\Entities;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['project_id', 'title', 'description', 'status', 'urgency', 'started_at', 'ended_at'];


}
