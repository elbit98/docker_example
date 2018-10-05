<?php

namespace Modules\Users\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Modules\Users\Http\Requests\PaymentRequest;
use Modules\Users\Repositories\PaymentRepository;

class PaymentController extends Controller
{

    protected $repo;

    public function __construct(PaymentRepository $repo)
    {
        $this->repo = $repo;
    }

    public function payment(PaymentRequest $request) {

        $client = new Client();

        $res = $client->request('GET', 'http://worldkassa.ru/user/oplata.php?id_shop=5426&summa='.$request->summ.'&hash=WFfjejehfkhjehfhw');

        return Redirect::to('http://worldkassa.ru/user/oplata.php?uniq='.$res->getBody());
    }

    public function paymentSuccess() {

        Session::flash('success', 'Successfully payment!');

        $this->repo->addMoney();

        return Redirect::to('balance');

    }

    public function paymentError() {

        Session::flash('error', 'Errors payment!');
        return Redirect::to('balance');

    }
}
