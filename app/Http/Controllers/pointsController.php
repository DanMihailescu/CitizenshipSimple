<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\points;
use Illuminate\Http\Request;

class pointsController extends Controller
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
         DB::table('points')->updateOrInsert( ['user' => Auth::id()], ['points' => $request->points]);
		return response()->json(['success'=>'yes']);
    }
  public function endpoints(Request $request)
    {	
	
		if($request->test_type == 1) {
		 	$points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->easyshort) && $points[0]->easyshort != NULL) {
		$add = $points[0]->easyshort + 1;
	} else {
		$add = 1;
	}
		
		 DB::table('points')->updateOrInsert( ['user' => Auth::id()], ['easyshort' => $add]);
		}
		if($request->test_type == 2) {
         $points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->easylong) && $points[0]->easylong != NULL) {
		$add = $points[0]->easylong + 1;
	} else {
		$add = 1;
	}
		 
		 DB::table('points')->updateOrInsert( ['user' => Auth::id()], ['easylong' => $add]);
		}
		if($request->test_type == 3) {
			$points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->mediumshort) && $points[0]->mediumshort != NULL) {
		$add = $points[0]->mediumshort + 1;
	} else {
		$add = 1;
	}
         DB::table('points')->updateOrInsert( ['user' => Auth::id()], ['mediumshort' => $add]);
		}
		if($request->test_type == 4) {
			$points = DB::table('points')->where('user', Auth::id())->get();
	if(isset($points[0]->mediumlong) && $points[0]->mediumlong != NULL) {
		$add = $points[0]->mediumlong + 1;
	} else {
		$add = 1;
	}
         DB::table('points')->updateOrInsert( ['user' => Auth::id()], ['mediumlong' => $add]);
		}
		return response()->json(['success'=>'yes']);
    }
  
    public function show(points $points)
    {
    $points = DB::table('points')->where('user', Auth::id())->get();
return response()->json(['points'=>$points]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\points  $points
     * @return \Illuminate\Http\Response
     */
    public function edit(points $points)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\points  $points
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, points $points)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\points  $points
     * @return \Illuminate\Http\Response
     */
    public function destroy(points $points)
    {
        //
    }
}
