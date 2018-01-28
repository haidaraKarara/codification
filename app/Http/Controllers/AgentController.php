<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;

class AgentController extends Controller
{
    private $user;
    private $response;
    private $body;
    private $message;
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->middleware('auth');
        // $this->user = $client;
        // $this->response = $this->user->get('localhost:8090/batiments/');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts/master',['message' => $this->message]);
    }

    public function afficheFormCreateBati()
    {
        return view('partials/ajoutBatiment',['message' => $this->message]);
    }
    
    public function createBatiment()
    {
        $this->message = 'Batiment créé avec succès';
        return view('partials/ajoutBatiment',['message' => $this->message]);
    }

    public function store(Request $request)
    {
        //
    }

    
    public function showBatiment()
    {
        try
        {
            $this->body = $this->response->getBody();
            $this->body = json_decode($this->body);
            return view('home',['agent' => $this->body]);
 
        }
        catch(RequestException $ex)
        {
            return redirect()->route('/',['error' => $ex]);
        }
       
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
