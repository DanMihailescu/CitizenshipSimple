<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\discoverytrack;
use App\practice;


class DiscoveryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function discovercanada()
    {
		$rightsper = null;
		$whoper = null;
        // Validate the request...
        $discovery = new discoverytrack;
		$oath = discoverytrack::where('section', 1)->where('user', Auth::id())->first();
		$rights = discoverytrack::where('section', 2)->where('user', Auth::id())->first();
		$who = discoverytrack::where('section', 3)->where('user', Auth::id())->first();
		$history = discoverytrack::where('section', 4)->where('user', Auth::id())->first();
	    $modern = discoverytrack::where('section', 5)->where('user', Auth::id())->first();
		$govern = discoverytrack::where('section', 6)->where('user', Auth::id())->first();
		$elections = discoverytrack::where('section', 7)->where('user', Auth::id())->first();
		$justice = discoverytrack::where('section', 8)->where('user', Auth::id())->first();
		$symbols = discoverytrack::where('section', 9)->where('user', Auth::id())->first();
		$economy = discoverytrack::where('section', 10)->where('user', Auth::id())->first();
		$regions = discoverytrack::where('section', 11)->where('user', Auth::id())->first();

		if(empty($oath)) {
			$oath = 'no';
			$oathcomplete = 'no';
						$oathper = '0%';

		} else {
			$oathper = '100%';
			$oathcomplete = 'yes';
		}
		if(empty($who)) {
			$who = 'no';
			$whoper = 0;
			$whocomplete = 'no';

		} else {
			$whoper .= $who->module/5*100;
			$whocomplete = 'yes';
		}
		if(empty($rights)) {
			$rights = 'no';
			$rightsper = 0;
			$rightscomplete = 'no';

		} else {
			$rightsper .= $rights->module/4*100;
			$rightscomplete = 'yes';
		}
		if(empty($history)) {
			$history = 'no';
			$historyper = 0;

		} else {
			$historyper = $history->module/12*100;
		
		}
			if(empty($justice)) {
			$justice = 'no';
			$justiceper = 0;

		} else {
			$justiceper = $justice->module/3*100;
		
		}
			if(empty($modern)) {
			$modern = 'no';
			$modernper = 0;

		} else {
			$modernper = $modern->module/5*100;
		
		}
			if(empty($govern)) {
			$govern = 'no';
			$governper = 0;

		} else {
			$governper = $govern->module/5*100;
		
		}
			if(empty($elections)) {
			$elections = 'no';
			$electionsper = 0;

		} else {
			$electionsper = $elections->module/5*100;
		
		}
			if(empty($economy)) {
			$economy = 'no';
			$economyper = 0;

		} else {
			$economyper = $economy->module/3*100;
		
		}
			if(empty($regions)) {
			$regions = 'no';
			$regionsper = 0;

		} else {
			$regionsper = $regions->module/6*100;
		
		}
	return view('discover', compact('regionsper', 'regions','economyper', 'oath', 'oathper', 'historyper', 'justiceper', 'modernper', 'governper', 'electionsper', 'rightscomplete', 'rightsper', 'oathcomplete', 'whoper', 'rights', 'who', 'history', 'modern', 'govern', 'elections', 'justice', 'symbols', 'economy', 'regions'));

    }
	  public function homepage()
    {
	 if(Auth::check())
 {
        return redirect()->route('home');
    }
    return view('welcome');
	}
  public function store(Request $request)
    {
        // Validate the request...
		
        $discovery = new discoverytrack;
		$discovery->module = $request->module;
        $discovery->section = $request->section;
		$discovery->completion = $request->completion;
		$discovery->nextsec = $request->nextsec;
		$discovery->user = auth()->user()->id;
	    DB::table('discoveryguide')->updateOrInsert( ['user' => Auth::id(), 'section' => $request->section],
        ['module' => $request->module, 'nextsec' => $request->nextsec, 'user' => auth()->user()->id, 'section' => $request->section, 'completion' => $request->completion]);
		return response()->json(['success'=>'yes']);


    }
	 public function discover()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 1)->get();

    return view('history/aboriginal', compact('questions'));
	}
	 public function discovertwo()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 2)->get();

    return view('history/discovertwo', compact('questions'));
	}
	 public function discoverthree()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 3)->get();

    return view('history/discoverthree', compact('questions'));
	}
	 public function discoverfour()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 4)->get();

    return view('history/discoverfour', compact('questions'));
	}
	 public function discoverfive()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 5)->get();

    return view('history/discoverfive', compact('questions'));
	}
	 public function discoversix()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 6)->get();

    return view('history/discoversix', compact('questions'));
	}
	 public function discoverseven()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 7)->get();

    return view('history/discoverseven', compact('questions'));
	}
	 public function discovereight()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 8)->get();

    return view('history/discovereight', compact('questions'));
	}
	 public function discovernine()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 9)->get();

    return view('history/discovernine', compact('questions'));
	}
	 public function discoverten()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 10)->get();

    return view('history/discoverten', compact('questions'));
	}
	 public function discovereleven()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 11)->get();

    return view('history/discovereleven', compact('questions'));
	}
	 public function discovertwelve()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 4)->where('section', 12)->get();

    return view('history/discovertwelve', compact('questions'));
	}
	 public function who()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 3)->where('section', 1)->get();

    return view('who/who', compact('questions'));
	}
	 public function theaboriginals()
    {
	
	$questions = practice::inRandomOrder()->where('chapter', 3)->where('section', 2)->get();

    return view('who/aboriginal', compact('questions'));
	}
	 public function englishandfrench()
    {
	
			$questions = practice::inRandomOrder()->where('chapter', 3)->where('section', 3)->get();

    return view('who/english', compact('questions'));
	}
	 public function becomingcanadian()
    {
			$questions = practice::inRandomOrder()->where('chapter', 3)->where('section', 4)->get();
    return view('who/becoming', compact('questions'));
	}
		 public function modernone()
    {
			$questions = practice::inRandomOrder()->where('chapter', 5)->where('section', 1)->get();
    return view('modern/modern', compact('questions'));
	}
	 public function moderntwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 5)->where('section', 2)->get();
    return view('modern/moderntwo', compact('questions'));
	}
	 public function modernthree()
    {
			$questions = practice::inRandomOrder()->where('chapter', 5)->where('section', 3)->get();
    return view('modern/modernthree', compact('questions'));
	}
		 public function governone()
    {
			$questions = practice::inRandomOrder()->where('chapter', 6)->where('section', 1)->get();
    return view('govern/govern', compact('questions'));
	}
	 public function governtwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 6)->where('section', 2)->get();
    return view('govern/governtwo', compact('questions'));
	}
	 public function governthree()
    {
			$questions = practice::inRandomOrder()->where('chapter', 6)->where('section', 3)->get();
    return view('govern/governthree', compact('questions'));
	}
	 public function rights()
    {
			$questions = practice::inRandomOrder()->where('chapter', 2)->where('section', 1)->get();
    return view('rights/rightsone', compact('questions'));
	}
	 public function rightstwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 2)->where('section', 2)->get();
    return view('rights/rightstwo', compact('questions'));
	}
	 public function elections()
    {
			$questions = practice::inRandomOrder()->where('chapter', 7)->where('section', 1)->get();
    return view('elections/elections', compact('questions'));
	}
	 public function electionstwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 7)->where('section', 2)->get();
    return view('elections/electionstwo', compact('questions'));
	}
	 public function electionsthree()
    {
			$questions = practice::inRandomOrder()->where('chapter', 7)->where('section', 3)->get();
    return view('elections/electionsthree', compact('questions'));
	}
	 public function electionsfour()
    {
			$questions = practice::inRandomOrder()->where('chapter', 7)->where('section', 4)->get();
    return view('elections/electionsfour', compact('questions'));
	}
	 public function justice()
    {
			$questions = practice::inRandomOrder()->where('chapter', 8)->where('section', 1)->get();
    return view('justice/justice', compact('questions'));
	}
	 public function symbols()
    {
			$questions = practice::inRandomOrder()->where('chapter', 9)->where('section', 1)->get();
    return view('symbols/symbols', compact('questions'));
	}

	 public function symbolstwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 9)->where('section', 2)->get();
    return view('symbols/symbols-two', compact('questions'));
	}
	 public function symbolsthree()
    {
			$questions = practice::inRandomOrder()->where('chapter', 9)->where('section', 3)->get();
    return view('symbols/symbols-three', compact('questions'));
	}
	 public function symbolsfour()
    {
			$questions = practice::inRandomOrder()->where('chapter', 9)->where('section', 4)->get();
    return view('symbols/symbols-four', compact('questions'));
	}
	 public function economy()
    {
			$questions = practice::inRandomOrder()->where('chapter', 10)->where('section', 1)->get();
    return view('economy/economy', compact('questions'));
	}
	 public function regions()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 1)->get();
    return view('regions/regions', compact('questions'));
	}
	 public function regionstwo()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 2)->get();
    return view('regions/regionstwo', compact('questions'));
	}
	 public function regionsthree()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 3)->get();
    return view('regions/regionsthree', compact('questions'));
	}
	 public function regionsfour()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 4)->get();
    return view('regions/regionsfour', compact('questions'));
	}
	 public function regionsfive()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 5)->get();
    return view('regions/regionsfive', compact('questions'));
	}
	 public function regionssix()
    {
			$questions = practice::inRandomOrder()->where('chapter', 11)->where('section', 6)->get();
    return view('regions/regionssix', compact('questions'));
	}
	
}
