<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Users\Repositories\UserRepository;

class MainController extends Controller
{
    protected $repo;

    public function __construct(UserRepository $repository)
    {
        $this->repo = $repository;
    }
}
