<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\score;
use Illuminate\Http\Request;

class scoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
 $score = new score;

        $score->user = Auth::id();
		$score->score = $request->score;
        $score->test = $request->test;
        $score->save();
		
		return response()->json(['success'=>'yes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, score $score)
    {
        //
    }
 public function info()
    {
		 return view('info');
	}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        //
    }
}
