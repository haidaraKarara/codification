<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtageController extends Controller
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
    public function __construct()
    {
        $this->middleware('auth');
        // $this->user = new Client();
        // $this->response = $this->user->get('http://localhost:8090/batiments');
        // $this->body = $this->response->getBody();
        // $this->body = json_decode($this->body);
    }

    public function index()
    {
        return view('layouts/master',['message' => $this->message]);
    }

}
