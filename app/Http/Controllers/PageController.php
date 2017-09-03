<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use SEO;

class PageController extends Controller
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
        //return view('home');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {
        $page = Page::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();

        SEO::setTitle($page->title);
        SEO::setDescription($page->excerpt);

        return view ('pages.show')->with('page', $page);
    }
    
    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        return view('contacts');
    }
    
    /**
     * Send info from contact form
     */
    public function postContacts(Request $request)
    {
        
    }
    
    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }
    
    /**
     * Show the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function teachers()
    {
        return view('teachers');
    }
    public function calendar()
    {
        $calendar = \App\Acme\Helpers\RoboforexHandler::getCalendar();
        return view('calendar')->with('calendar', $calendar);
    }
}