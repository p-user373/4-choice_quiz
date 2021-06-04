<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Completion;

use Auth;

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
        session()->forget("name");
        
        $user_id=Auth::id();

        $completion_quantity=Completion::where("u_id",$user_id)->count();

        $correct_quantity=Completion::where("u_id",$user_id)->where("correct_or_not",1)->count();

        return view('home',compact("completion_quantity","correct_quantity"));
    }
}
