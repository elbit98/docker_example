<?php

namespace Modules\Users\Http\Controllers\Auth;

use Illuminate\Http\Request;

use Modules\Users\Entities\User;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;

class LoginController extends Controller
{
    use ValidatesRequests, AuthenticatesUsers;


    protected $redirectTo = '/home';

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('users::login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
