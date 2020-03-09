<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DiscoveryController@homepage');
	


Route::get('/who-we-are', function () {
    return view('discoverone');
});

//POINTS ROUTES - DISPLAY AND UPDATE/CREATE
Route::get('/points', 'pointsController@show');
Route::post('/postpoints', 'pointsController@store');
Route::get('/terms-of-service', function () {
    return view('discovertwo');
});
Route::get('/privacy-policy', function () {
    return view('privacy');
});
Route::get('/help', function () {
    return view('help');
});


Route::get('/how-canadians-govern-themselves', function () {
    return view('discoverfour');
});


Route::get('/justice-system', function () {
    return view('discoversix');
});
Route::get('/canadian-symbols', function () {
    return view('discoverseven');
});
Route::get('/canada-economy', function () {
    return view('discovereight');
});
Route::get('/canada-regions', function () {
    return view('discovernine');
});
Route::get('/rights-and-responsibilities', function () {
    return view('discoverten');
});
Route::get('/discover-canada', 'DiscoveryController@discovercanada');
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/easy-start', function () {
    return view('easy-start');
})->middleware('auth');
Route::get('/medium-start', function () {
    return view('med-start');
	Route::get('/hard-start', function () {
    return view('hard-start');
})->middleware('auth');
})->middleware('auth');
Route::get('/easy-start', function () {
    return view('easy-start');
})->middleware('auth');
Route::get('/quiz', function () {
return view('fulltest');
});
Route::get('/practice-test-with-answers', 'practiceController@questionswithanswers');
Route::get('/timed-test', 'practiceController@timedtest');
Route::get('/chapter-test', 'practiceController@chaptertest');

Route::get('/zip-test-free', 'practiceController@ziptestfree');
Route::get('/full-test-free', 'practiceController@timedtestfree');

Route::get('/full-test', function () {
    return view('timertest');
});
Route::get('/upgrade-select', function () {
    return view('upgradeselect')->middleware('auth');
});
Route::get('/upgrade-select', function () {
    return view('upgradeselect');
});

Route::get('/chapter-test-free', function () {
    return view('chaptertestfree');
});

Route::get('/discover-canada-free', function () {
    return view('discovercanadafree');
});


Route::get('/citizenship-test', function () {
 if(Auth::check())
 {
        return redirect()->route('home');
    }
    return view('citizenshiptest');
});
Route::get('/oath/oath-of-citizenship', function () {
    return view('oath/oath');
});
Route::get('/who/who-we-are', 'discoveryController@who');
Route::get('/who/the-aboriginals', 'discoveryController@theaboriginals');
Route::get('/who/english-and-french', 'discoveryController@englishandfrench');
Route::get('/who/becoming-canadian', 'discoveryController@becomingcanadian');
Route::get('/modern/modern','discoveryController@modernone');
Route::get('/modern/modern-two','discoveryController@moderntwo');
Route::get('/modern/modern-three','discoveryController@modernthree');
Route::get('/justice/justice','discoveryController@justice');
Route::get('/govern/govern','discoveryController@governone');
Route::get('/govern/govern-two','discoveryController@governtwo');
Route::get('/govern/govern-three','discoveryController@governthree');
Route::get('/economy/economy','discoveryController@economy');
Route::get('/regions/regions','discoveryController@regions');
Route::get('/regions/regions-two','discoveryController@regionstwo');
Route::get('/regions/regions-three','discoveryController@regionsthree');
Route::get('/regions/regions-four','discoveryController@regionsfour');
Route::get('/regions/regions-five','discoveryController@regionsfive');
Route::get('/regions/regions-six','discoveryController@regionssix');
Route::get('/symbols/symbols','discoveryController@regionssix');
Route::get('/symbols/symbols-two','discoveryController@regionssix');
Route::get('/symbols/symbols-three','discoveryController@regionssix');
Route::get('/symbols/symbols-four','discoveryController@regionssix');
Route::get('/elections/elections','discoveryController@elections');
Route::get('/elections/elections-two','discoveryController@electionstwo');
Route::get('/elections/elections-three','discoveryController@electionsthree');
Route::get('/elections/elections-four','discoveryController@electionsfour');
Route::get('/rights/rights','discoveryController@rights');
Route::get('/rights/rightstwo','discoveryController@rightstwo');

Route::get('/citizenship-info','scoreController@info');

Route::get('/canadas-history/aboriginal-peoples','discoveryController@discover');
Route::get('/canadas-history/first-europeans','discoveryController@discovertwo');
Route::get('/canadas-history/royal-new-france','discoveryController@discoverthree');
Route::get('/canadas-history/struggle-for-a-continent','discoveryController@discoverfour');
Route::get('/canadas-history/quebec','discoveryController@discoverfive');
Route::get('/canadas-history/history-six','discoveryController@discoversix');
Route::get('/canadas-history/history-seven','discoveryController@discoverseven');
Route::get('/canadas-history/history-eight','discoveryController@discovereight');
Route::get('/canadas-history/history-nine','discoveryController@discovernine');
Route::get('/canadas-history/history-ten','discoveryController@discoverten');
Route::get('/canadas-history/history-eleven','discoveryController@discovereleven');
Route::get('/canadas-history/history-twelve','discoveryController@discovertwelve');


Route::post('/discoverytrackpost', 'DiscoveryController@store');
Route::post('/scoresave', 'scoreController@store');
Route::post('/endpoints', 'pointsController@endpoints');

// header
Route::get('/header', function () {
    return view('header');
});
Auth::routes();

Route::resource('contacts', 'ContactController');

Route::get('/home', 'HomeController@index')->name('home');
