<?php

namespace Modules\Users\Http\Controllers\Auth;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Validation\ValidatesRequests;

//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use ValidatesRequests, SendsPasswordResetEmails;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('users::fogot_password');
    }


    public function broker()
    {
        return Password::broker('sellers');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
