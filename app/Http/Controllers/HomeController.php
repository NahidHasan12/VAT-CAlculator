<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function calculator(Request $request){
        //dd($request->al());
        $gross_sum = $request->gross_sum;
        $vat_operation = $request->vat_operation;
        $vat_percentage = floatval($request->vat_percentage);

        if($vat_operation == 'include') {
            $vat_amount = $gross_sum - ($gross_sum / (1 + ($vat_percentage / 100)));
        } else {
            $vat_amount = ($gross_sum * ($vat_percentage / 100));
        }

        $output = round($vat_amount, 2);
        // dd($output);
        return view('home', compact('output'));
    }
}
