<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
		
		$user_type = Auth::user()->user_type;

		$level = Auth::user()->level;
		$score = DB::table('scoretable')->where('user', Auth::id())->where('test', 1)->take(10)->latest()->get();
		$scoretwo = DB::table('scoretable')->where('user', Auth::id())->where('test', 2)->take(10)->latest()->get();
		$scorethree = DB::table('scoretable')->where('user', Auth::id())->where('test', 3)->take(10)->latest()->get();
		$scorefour = DB::table('scoretable')->where('user', Auth::id())->where('test', 4)->take(10)->latest()->get();
		$scorefive = DB::table('scoretable')->where('user', Auth::id())->where('test', 5)->take(10)->latest()->get();
		$scoresix = DB::table('scoretable')->where('user', Auth::id())->where('test', 6)->take(10)->latest()->get();
		$scoreseven = DB::table('scoretable')->where('user', Auth::id())->where('test', 7)->take(10)->latest()->get();
		$scoreeight = DB::table('scoretable')->where('user', Auth::id())->where('test', 8)->take(10)->latest()->get();
		$scorenine = DB::table('scoretable')->where('user', Auth::id())->where('test', 9)->take(10)->latest()->get();
		$scoreeleven = DB::table('scoretable')->where('user', Auth::id())->where('test', 10)->take(10)->latest()->get();
		$scoretwelve = DB::table('scoretable')->where('user', Auth::id())->where('test', 11)->take(10)->latest()->get();
		$scorethirteen = DB::table('scoretable')->where('user', Auth::id())->where('test', 12)->take(10)->latest()->get();
		$scorefourteen = DB::table('scoretable')->where('user', Auth::id())->where('test', 13)->take(10)->latest()->get();
		$scorefifteen = DB::table('scoretable')->where('user', Auth::id())->where('test', 14)->take(10)->latest()->get();
		$scoresixteen = DB::table('scoretable')->where('user', Auth::id())->where('test', 15)->take(10)->latest()->get();
		$scoreten = DB::table('scoretable')->where('user', Auth::id())->where('test', 16)->take(10)->latest()->get();
		if(isset($score[0]->score)){}else{
		$score = [];
		$score[0] = (object) ['score' => 0, 'test' => 0];				
		}
	if(isset($scoretwo[0]->score)){}else{
		$scoretwo = [];
		$scoretwo[0] = (object) ['score' => 0, 'test' => 0];				
		}
		if(isset($scorethree[0]->score)){}else{
		$scorethree = [];
		$scorethree[0] = (object) ['score' => 0, 'test' => 0];				
		}
		if(isset($scorefour[0]->score)){}else{
		$scorefour = [];
		$scorefour[0] = (object) ['score' => 0, 'test' => 0];				
		}
		if(isset($scorefive[0]->score)){}else{
		$scorefive = [];
		$scorefive[0] = (object) ['score' => 0, 'test' => 0];				
		}
		if(isset($scoresix[0]->score)){}else{
		$scoresix = [];
		$scoresix[0] = (object) ['score' => 0, 'test' => 0];				
		}
		$points = DB::table('points')->where('user', Auth::id())->get();
		if(isset($points[0]->points)){}else{
		$points = [];
		$points[0] = (object) ['points' => 0, 'easyshort' => 0, 'easylong' => 0, 'mediumshort' => 0, 'mediumlong' => 0];				
		}
        return view('home', compact('user_type', 'level', 'points', 'score', 'scoretwo', 'scorethree', 'scorefour', 'scorefive', 
		'scoresix', 'scoreseven', 'scoreeight', 'scorenine', 'scoreten',
		'scoreeleven', 'scoretwelve', 'scorethirteen',
		'scorefourteen', 'scorefifteen', 'scoresixteen'));
    }
	 public function info()
    {
		 return view('info');
	}
}
