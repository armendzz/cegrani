<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMailRequest;
use App\Post;
use Config;
use App\Category;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {
      $air = json_decode(file_get_contents('http://api.airvisual.com/v2/city?city=Gostivar&state=Gostivar&country=north-macedonia&key=7475d8d1-abd1-4bea-9bbd-c402bf4aebd2'), true);
      $ajri = $air['data']['current']['pollution']['aqicn'];
      $sot = json_decode(file_get_contents('https://api.weather.com/v3/wx/observations/current?geocode=41.8366%2C20.9722&units=m&language=en-US&format=json&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
      $tempora = json_decode(file_get_contents('https://api.weather.com/v1/geocode/41.8366/20.9722/forecast/fifteenminute.json?units=m&language=en-US&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
      $res = json_decode(file_get_contents('https://api.weather.com/v1/geocode/41.8366/20.9722/forecast/daily/5day.json?units=m&language=en-US&apiKey=9d2908c81003444ea908c81003b44ed4'), true);
      $date = date('Y-m-d');
      /* dd($res); */
      $category = Category::where('name', 'njoftime')->first();
      $njoftime = $category->posts()->orderBy('created_at','desc')->take(3)->get();
      
        return view('home')->with('air', $ajri)->with('sot', $sot)->with('tempora', $tempora)->with('temp', $res)->with('date', $date)->with('posts', Post::orderBy('created_at','desc')->take(3)->get())->with('njoftime', $njoftime);
    }
    public function mail() {

          
      return view('mail');


    }

    public function mailcreate(CreateMailRequest $request) {

      $mailapi = config('createmail.mailapi');
      $user = $request->user;
      $passwd = $request->passwd;
      $passwd2 = $request->passwd2;
      
      $response = Http::asForm()->post($mailapi, [
        'action' => 'create',
        'domain' => 'cegrani.mk',
        'user' => $user,
        'passwd' => $passwd,
        'passwd2' => $passwd2,
        'quota' => '5000',
        'limit' => '50'
    ]);
      session()->flash('sukses', 'E-maili juaj u krijua me sukses, Ju lutem lexoni udhezimet e meposhtme si ta perdroni');
        return redirect('/mail');
    }
}

