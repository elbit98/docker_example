<?php

namespace Modules\Users\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{

    protected $url = 'http://worldkassa.ru/user/oplata.php';

    public function payment() {

        $client = new Client();

        $res = $client->request('GET', 'http://worldkassa.ru/user/oplata.php?id_shop=5426&summa=30&hash=WFfjejehfkhjehfhw');

        return Redirect::to('http://worldkassa.ru/user/oplata.php?uniq='.$res->getBody());
    }

    public function paymentSuccess() {

        Session::flash('success', 'Successfully payment!');
        return Redirect::to('balance');


    }

    public function paymentError() {

        Session::flash('error', 'Errors payment!');
        return Redirect::to('balance');

    }
}
