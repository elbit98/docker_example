<?php

namespace Modules\Projects\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Projects\Entities\Project;
use Modules\Projects\Http\Requests\TaskRequest;
use Modules\Projects\Repositories\TasksRepository;

class TaskController extends Controller
{

    protected $repo;

    public function __construct(TasksRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(TaskRequest $request)
    {
        $project = Project::find($request->project_id);
        $project->tasks()->create($request);

        return Redirect::to('projects/' . $request->project_id);
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(TaskRequest $request)
    {

        $project = Project::find($request->project_id);
        $project->tasks()->create($request);

        return Redirect::to('projects/' . $request->project_id);

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('projects::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('projects::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
