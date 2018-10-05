<?php

namespace Modules\Projects\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Projects\Entities\Project;
use Modules\Projects\Entities\Task;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(Project::class, 5)->create([]);

        // Task
        factory(Task::class, 13)->create([]);

    }
}
