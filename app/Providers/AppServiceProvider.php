<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      /*   $air = json_decode(file_get_contents('http://api.airvisual.com/v2/city?city=Gostivar&state=Gostivar&country=north-macedonia&key=7475d8d1-abd1-4bea-9bbd-c402bf4aebd2'), true);
        $ajri = $air['data']['current']['pollution']['aqicn'];
        $sot = json_decode(file_get_contents('https://api.weather.com/v3/wx/observations/current?geocode=41.8366%2C20.9722&units=m&language=en-US&format=json&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
        $tempora = json_decode(file_get_contents('https://api.weather.com/v1/geocode/41.8366/20.9722/forecast/fifteenminute.json?units=m&language=en-US&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
        $res = json_decode(file_get_contents('https://api.weather.com/v1/geocode/41.8366/20.9722/forecast/daily/5day.json?units=m&language=en-US&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
       */  $date = date('Y-m-d');

        View::share('date', $date);
       /*  View::share('temp', $res);
        View::share('tempora', $tempora); */
      /*   View::share('air', $ajri); */
       /*  View::share('sot', $sot); */
       
    }
}
