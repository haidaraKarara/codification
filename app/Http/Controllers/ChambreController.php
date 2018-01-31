<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class ChambreController extends Controller
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
    public function choisirBatiment()
    {
        $batiments = $this->recupBatiments();
        return view('partials/chambreChoixBatiment',['batiments' => $batiments]);
    }
    public function choisirEtage(Request $req)
    {
        $req = $req->input('batiment');
        $etages = $this->recupEtages($req);
        return view('partials/chambreChoixEtage',['etages' => $etages]);
    }
    public function choisirCouloir(Request $req)
    {
        $req = $req->input('etage');
        $couloir = $this->recupCouloir($req);
        return view('partials/chambreChoixCouloir',['couloirs' => $couloir]);

    }
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
    public function recupCouloir($id)
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Etages/'.$id.'/coulois');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }



    public function createChambre(Request $req)
    {
        $idCouloir = $req->input('couloir');
        $numChambre = $req->input('chambre');
        $maxOcc = $req->input('maxOccupant');
        $this->user->post('https://codificationesp.herokuapp.com/api/Chambres',
        ['body' => [
            'numchambre' => $numChambre,
            'nbremaxoccupants' => $maxOcc,
            'couloirId' =>    $idCouloir      
        ]]);
        $message = 'La chambre '.'<<'.$numChambre.'>> a été créé avec succès !';
        $fin = 'Fin création de la chambre'.$numChambre;
        return view('partials/ajoutChambre',['message' => $message, 'fin' => $fin]);
    }
}
