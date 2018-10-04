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

    public function index()
    {
        return view('users::register');
    }


    protected function create($data)
    {
        return $this->userRepository->create($data);
    }


    public function register(Request $request)
    {
        $this->validate($request, $this->rules());

        event(new Registered($user = $this->create($request)));

        return response()->json(['success' => 'User register success']);

    }


    /**
     * @return array
     */
    protected function rules()
    {
        return (new RegistrationRequest())->rules();
    }
}
