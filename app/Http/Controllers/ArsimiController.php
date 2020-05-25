<?php

namespace App\Http\Controllers;
require_once '../vendor/autoload.php';
use Illuminate\Http\Request;

class ArsimiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d');



        $fb = new \Facebook\Facebook([
            'app_id' => 'APP IDD',
            'app_secret' => 'APP SECRET',
            'default_graph_version' => 'v2.10',
            ]);
        
            
        
        
              try {
                // Returns a `FacebookFacebookResponse` object
                $response = $fb->get(
                  'fbpage',
                  'token'
                );
              } catch(FacebookExceptionsFacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
              } catch(FacebookExceptionsFacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
              }
              $graphNode = $response->getGraphEdge();
              $postt = (json_decode($graphNode));
              foreach($postt as $post){
                $vidid = substr($post->id, -16);
              }
              //dd($vidid);
        return view('arsimi')->with('date', $date)->with('post', $postt);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
