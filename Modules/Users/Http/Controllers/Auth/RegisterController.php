<?php

namespace Modules\Users\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Repositories\UserRepository;
use Modules\Users\Http\Requests\RegistrationRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class RegisterController extends Controller
{

    use ValidatesRequests;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * RegisterController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest');
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('users::register');
    }


    /**
     * @param $data
     * @return mixed
     */
    protected function create($data)
    {
        return $this->userRepository->create($data);
    }


    /**
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegistrationRequest $request)
    {
        event(new Registered($user = $this->create($request->all())));

        return response()->json(['success' => 'User register success']);

    }


}
