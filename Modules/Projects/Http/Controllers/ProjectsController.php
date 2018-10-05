<?php

namespace Modules\Projects\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Projects\Entities\Project;
use Modules\Projects\Http\Requests\ProjectRequest;
use Modules\Projects\Repositories\ProjectsRepository;
use Modules\Users\Entities\User;

class ProjectsController extends Controller
{
    protected $repo;

    public function __construct(ProjectsRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $projects = User::find(Auth::user()->id)->projects;

        if (count($projects) == 0) return $this->create();

        return view('projects::index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects::create');
    }


    /**
     * @param ProjectRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProjectRequest $request)
    {

        $user = User::find(Auth::user()->id);
        $user->projects()->create(['name' => $request->name]);

        return Redirect::to('projects');

    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

        $project = Project::find($id);

        $taskData = $this->repo->taskSort($project);

        return view('projects::show', compact('project', 'taskData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(ProjectRequest $request, $id)
    {

        $nerd = Project::find($id);
        $nerd->name = $request->name;
        $nerd->save();

        Session::flash('message', 'Successfully updated nerd!');

        return Redirect::to('projects');

    }


    /**
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('projects')->with('success', 'Information has been  deleted');
    }

}
