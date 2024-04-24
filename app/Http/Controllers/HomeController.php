<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

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
        $evenements = Evenement::all();
        return view('home', compact('evenements'));
    }
    public function bienvenue(){
        $evenements = Evenement::all();
        return view('welcome', compact('evenements'));
    }
}
