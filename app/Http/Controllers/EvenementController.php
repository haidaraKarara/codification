<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    private $message;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('partials/ajoutEvenement',['message' => $this->message]);
    }
    public function createEvenement()
    {
        $this->message = 'Evenement créé avec succès';
        return view('partials/ajoutEvenement',['message' => $this->message]);
    }
}
