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
    //Création
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
    //Suppression
    public function deleteEtage()
    {
        $batiments = $this->recupBatiments();
        $etages = $this->recupEtages();
        $this->message = 'Batiment supprimé avec succès';
        return view('partials/deleteEtage',['message' => $this->message,'batiments' => $batiments,'etages' => $etages]);
    }
    public function showFormDeleteEtage()
    {
        $batiments = $this->recupBatiments();
        $etages = $this->recupEtages();
        return view('partials/deleteEtage',['message' => $this->message,'batiments' => $batiments,'etages' => $etages]);
    }
    // Fin Suppression
    public function recupBatiments()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
    
    public function recupEtages()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Etages');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
    public function recupIdBatiment()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
}
