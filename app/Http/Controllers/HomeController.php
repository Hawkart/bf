<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Forecast;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->limit(3)->get();
        $forecasts = Forecast::orderBy('id', 'desc')->limit(3)->get();
        
        $calendar = \App\Acme\Helpers\RoboforexHandler::getCalendar();
        return view('home', [
            'forecasts' => $forecasts,
            'articles' => $articles,
            'calendar' => $calendar
        ]);
    }
}