<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class CouloirController extends Controller
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
    public function createCouloir(Request $req)
    {
        $idEtage = $req->input('etage');
        $nomCouloir = $req->input('couloir');
        $this->user->post('https://codificationesp.herokuapp.com/api/Couloirs',
        ['body' => [
            'nomcouloir' => $nomCouloir,
            'etageId' =>    $idEtage      
        ]]);
        $message = 'Le Couloir '.'<<'.$nomCouloir.'>> a été créé avec succès !';
        $fin = 'Fin création du couloir';
        return view('partials/ajoutCouloir',['message' => $message, 'fin' => $fin]);
    }
    public function choisirBatiment()
    {
        $batiments = $this->recupBatiments();
        return view('partials/choixBatiment',['batiments' => $batiments]);
    }

    public function choisirEtage(Request $req)
    {
        $req = $req->input('batiment');
        $etages = $this->recupEtages($req);
        return view('partials/choixEtage',['etages' => $etages]);
    }
    //Fin création 
    public function recupBatiments()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
   
    public function recupEtages($id)
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments/'.$id.'/etages');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }
}
