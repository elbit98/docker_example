<?php

namespace Modules\Projects\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\Project;
use Modules\Projects\Repositories\ProjectsRepository;

class ProjectsController extends Controller
{

    protected $repo;

    public function __construct(ProjectsRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Project $project)
    {

//        dd($project->tasks);

        return view('projects::index');
    }

}
