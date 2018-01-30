<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

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
        $this->user = new Client();
    }

    public function showFormAjoutEtage()
    {
        $batiments = $this->recupBatiments();
        return view('partials/ajoutEtage',['message' => $this->message,'batiments' => $batiments]);
    }

    public function createEtage(Request $req)
    {
        $input_numEtage = $req->input('numEtage');
        $input_idBat = $req->input('etage');
        $this->user->post('https://codificationesp.herokuapp.com/api/Etages',
        ['body' => [
            'numetage' => $input_numEtage,
            'batiment_fk' => $input_idBat         
        ]]);
        $batiments = $this->recupBatiments();
        $this->message = 'Etage créé avec succès';
        return view('partials/ajoutEtage',['message' => $this->message,'batiments' => $batiments]);
    }

    public function recupBatiments()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
}
