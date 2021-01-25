<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\PaymentPlataform;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Recibir lista de monegas
        $currencies=Currency::all();
        $paymentPlataforms=PaymentPlataform::all();
        return view('home')->with([
            'currencies'=>$currencies,
            'paymentPlataforms'=>$paymentPlataforms
        ]);
    }
}
