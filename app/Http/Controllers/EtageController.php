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
        $etages = $this->recupEtages();
        return view('partials/ajoutEtage',['message' => $this->message,'batiments' => $batiments,'etages' => $etages]);
    }

    public function createEtage(Request $req)
    {
        $input_numEtage = $req->input('numEtage');
        $input_idBat = $req->input('etage');
        $etages = $this->recupEtages();
        $this->user->post('https://codificationesp.herokuapp.com/api/Etages',
        ['body' => [
            'numetage' => $input_numEtage,
            'batiment_fk' => $input_idBat         
        ]]);
        $batiments = $this->recupBatiments();
        $this->message = 'Etage créé avec succès';
        return view('partials/ajoutEtage',['message' => $this->message,'batiments' => $batiments,'etages' => $etages]);
    }
    //Suppression
    public function deleteEtageChoixEtage(Request $req)
    {
        $batiments = $this->recupBatiments();
        $req = $req->input('batiment');
        $etages = $this->recupEtagesId($req);
        return view('partials/deleteEtageChoixEtage',['etages' => $etages]);
    }

    public function deleteEtage(Request $req)
    {
        $etage= $req->input('etage');
        $this->user->delete('https://codificationesp.herokuapp.com/api/Etages/'.$etage);
        $message = "L'étage a été supprimée avec succès !";
        $fin = "Suppression terminée";
        return view('partials/deleteEtage',['message' => $message,'fin' => $fin]);
    }
    
    public function showFormDeleteEtage()
    {
        $batiments = $this->recupBatiments();
        return view('partials/deleteEtageChoixBatiment',['batiments' => $batiments]);
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
    public function recupEtagesId($id)
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments/'.$id.'/etages');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
}
