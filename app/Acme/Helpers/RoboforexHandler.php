<?php

namespace App\Acme\Helpers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;
use Cache;
use Feeds;

class RoboforexHandler{
    
    public static $calendar_path = 'calendar.txt';
    
    public static function getCalendar()
    {
        $calendar = Cache::remember('calendar', 2, function(){
            
            $url = 'http://www.roboforex.com/ru/beginners/analytics/economic-calendar/events/';
            $client = new Client();
            //$client->setUserAgent('Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36');
            
            $response = $client->request('POST', $url, [
                'form_params' => [
                    'calendar_filter_form' => [
                        'timezone' => 180,
                        'from' => '',
                        'to' => ''
                    ]
                ]
            ]);
            $calendar = $response->getBody();
            $calendar = str_replace("/Sep", '/Сентябрь', $calendar);
            
            Storage::disk('public')->put(self::$calendar_path, $calendar);
            
            return $calendar;
        });
        
        return $calendar;
    }
}