<?php

namespace Modules\Projects\Repositories;

use Modules\Projects\Entities\Project;

class ProjectsRepository
{

    public function taskSort($project) {
        $taskNew = collect();
        $taskWork = collect();
        $taskDone = collect();
        foreach ($project->tasks as $task) {
            if ($task->status == 0) $taskNew->push($task);
            if ($task->status == 1) $taskWork->push($task);
            if ($task->status == 2) $taskDone->push($task);
        }

        $taskData = collect();
        $taskData->push($taskNew);
        $taskData->push($taskWork);
        $taskData->push($taskDone);

        return $taskData;

    }


}