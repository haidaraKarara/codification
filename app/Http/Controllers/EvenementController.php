<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;
class EvenementController extends Controller
{
    private $message;
    private $user;


    public function __construct()
    {
        $this->middleware('auth');
        $this->user = new Client();

    }
    public function index()
    {

        return view('partials/ajoutEvenement',['message' => $this->message]);
    }
    public function createEvenement(Request $req)
    {
        $debut = $req->input('ouverture');
        $fin = $req->input('fermeture');
        $this->user->post('https://codificationesp.herokuapp.com/api/PeriodeCodifications',
        ['body' => [
            'datedebut' => $debut,
            'datefin' => $fin
        ]]);
        $this->message = 'Evenement créé avec succès !';
        return view('partials/ajoutEvenement',['message' => $this->message]);
    }
}
