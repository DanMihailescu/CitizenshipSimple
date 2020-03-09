<?php

namespace App\Http\Controllers;
use App\practice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class practiceController extends Controller
{
	 public function questionswithanswers()
    {
	$number = 10;
    $test = Input::get('test_type');
	if(Auth::User()->user_type == 'free') {
		if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = DB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = pDB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 =DB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
		
	} else {
	
	if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
	}
	$points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->points)){}else{
		$points = [];
		$points[0] = (object) ['points' => 0, 'easyshort' => 0, 'easylong' => 0, 'mediumshort' => 0, 'mediumlong' => 0];				
		}
	return view('quiz', compact('questions', 'points', 'test'));	 
	}
	 public function chaptertest()
    {
	$number = Input::get('number');
    $test = Input::get('test_type');
	$chapter = Input::get('chapter');
	if($chapter == 1){
		$easy = $number*0.7;
		$medium = $number*0.3;
		$question = practice::inRandomOrder()->where('chapter', 1)->orWhere('chapter', 2)->take(10)->get();
			$questions = $question->shuffle();	

	} else {
	if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->where('chapter', $chapter)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->where('chapter', $chapter)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.4;
		$medium = $number*0.5;
		$hard = $number*0.1;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->where('chapter', $chapter)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->where('chapter', $chapter)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->where('chapter', $chapter)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->where('chapter', $chapter)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->where('chapter', $chapter)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->where('chapter', $chapter)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->where('chapter', $chapter)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->where('chapter', $chapter)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
	}
	$points = DB::table('points')->where('user', Auth::id())->get();
	
	if(isset($points[0]->points)){}else{
		$points = [];
		$points[0] = (object) ['points' => 0, 'easyshort' => 0, 'easylong' => 0, 'mediumshort' => 0, 'mediumlong' => 0];				
		}
	return view('chapterquiz', compact('questions', 'points', 'test'));	 
	}
	 public function ziptestfree()
    {
	$number = 10;
    $test = 1;
	if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->where('sample', 'zip')->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->where('sample', 'zip')->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
	$points = "1";
	return view('ziptestfree', compact('questions', 'points', 'test'));	 
	}
	 public function timedtest()
    {
	$number = Input::get('number');
    $test = Input::get('test_type');
	if(Auth::User()->user_type == 'free') {
		if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = DB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = pDB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = DB::table('freetable')->inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = DB::table('freetable')->inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 =DB::table('freetable')->inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
		
	} else {
	
	if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
	}
	$points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->points)){}else{
		$points = [];
		$points[0] = (object) ['points' => 0, 'easyshort' => 0, 'easylong' => 0, 'mediumshort' => 0, 'mediumlong' => 0];				
		}
	return view('timertest', compact('questions', 'points', 'test'));	 
	}
	public function timedtestfree()
    {
	$number = 20;
    $test = 3;
	if($test == 1) {
		$easy = $number*0.7;
		$medium = $number*0.3;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$question = $a2->merge($a1);
		$questions = $question->shuffle();	
	} elseif($test == 2) {
		$easy = $number*0.2;
		$medium = $number*0.6;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$question = $result->merge($a3);
		$questions = $question->shuffle();
			
	} elseif($test == 3) {
		$medium = $number*0.5;
		$hard = $number*0.5;
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$questions = $a2->merge($a3);		
	} else {
		$easy = $number*0.4;
		$medium = $number*0.4;
		$hard = $number*0.2;
		$a1 = practice::inRandomOrder()->where('difficulty', 1)->take($easy)->get();
		$a2 = practice::inRandomOrder()->where('difficulty', 2)->take($medium)->get();
		$a3 = practice::inRandomOrder()->where('difficulty', 3)->take($hard)->get();
		$result = $a1->merge($a2);
		$questions = $result->merge($a3);
	}
	$points = "1";
	return view('timedtestfree', compact('questions', 'points', 'test'));	 
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	   
    }
 public function levelup(Request $request)
    {
    
	$testtype = $request->test;
	$points = DB::table('points')->where('user', Auth::id())->get();

	
	   
	   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function edit(practice $practice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, practice $practice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy(practice $practice)
    {
        //
    }
}
