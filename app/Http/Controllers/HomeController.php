<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        //$client = new Client();
        //$res = $client->request('GET', 'http://dataservice.accuweather.com/forecasts/v1/daily/5day/227919?apikey=ppI3XuP0Z4IsuE0oYMkgJkTEhNqLSIow&details=true');
        //$res = json_decode(file_get_contents('http://dataservice.accuweather.com/forecasts/v1/daily/5day/227919?apikey=eOYiiAjNR0EuRaIGNoxAlXQQLn56cQMb&details=true'), true);
          // $tempora = json_decode(file_get_contents('https://api.weather.com/v1/geocode/41.8366/20.9722/forecast/intraday/3day.json?units=m&language=en-US&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
       
        //$sot = json_decode(file_get_contents('http://dataservice.accuweather.com/forecasts/v1/daily/1day/227919?apikey=eOYiiAjNR0EuRaIGNoxAlXQQLn56cQMb&details=true'), true);
        //dd($sot['DailyForecasts'][0]['AirAndPollen'][0]['Value']);
       // dd($sot['DailyForecasts'][0]['AirAndPollen'][0]['Category']);
       // dd($res);
        
        return view('home');
    }
}
