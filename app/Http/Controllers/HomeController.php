<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Session;


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
    public function index(Request $request)
    {

        return view('home');

/*
        switch (Auth::user()->rol) {
            case 'RIP':
//                $yearq = "2020";
//                $tramites = Tramite::all();
                $tramites = Tramite::where('fecha','>=', "$year-01-01")->where('fecha','<=', "$year-12-31")->paginate(15);//->get();
//                var_dump(DB::getQueryLog() );
//               return;
                return view('RIP.home', compact('tramites','year'));
                break;
            case 'FINANCIEROS':
                return view('home');
                break;
            case 'SUBACAD':
                return view('home');
                break;
            default:
                return view('home');
                break;
        }
*/
    }
}
