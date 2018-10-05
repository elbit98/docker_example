<?php

namespace Modules\Projects\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Users\Entities\User;

class Project extends Model
{
    protected $fillable = ['name'];



    public function tasks()
    {
        return $this->hasMany('Modules\Projects\Entities\Task');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
