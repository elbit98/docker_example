<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Users\Repositories\UserRepository;

class UsersController extends MainController
{

    protected $repo;

    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('users::index');
    }

    public function balance()
    {
        return view('users::balance');
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        return view('users::profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        if ($request->get('type_edit') == 'password')
            $this->repo->editPassword($user, $request->get('password'));

        if ($request->get('type_edit') == 'full_name')
            $this->repo->editFullName($user, $request->get('full_name'));

    }

}
