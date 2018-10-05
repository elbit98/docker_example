<?php

namespace Modules\Users\Repositories;

use Illuminate\Support\Facades\Auth;
use Modules\Users\Entities\User;

class PaymentRepository
{

    public function addMoney() {

           $user = User::find(Auth::user()->id);
           $user->balance = $user->balance+rand(50,150);
           $user->save();
    }

}