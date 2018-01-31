<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

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
    public function __construct()
    {
        $this->middleware('auth');
        $this->user = new Client();
    }
    public function recupBatiments()
    {
        $this->response = $this->user->get('https://codificationesp.herokuapp.com/api/Batiments');
        $this->body = $this->response->getBody();
        $this->body = json_decode($this->body);
        return $this->body;
    }

    public function index()
    {
        return view('home');
    }

    public function afficheFormCreateBati()
    {
        return view('partials/ajoutBatiment',['message' => $this->message]);
    }
    
    public function createBatiment(Request $req)
    {
        $req = $req->input('batiment');
        $this->user->post('https://codificationesp.herokuapp.com/api/Batiments',
        ['body' => [
            'nombatiment' => $req          
        ]]);
        $this->message = 'Batiment créé avec succès';
        return view('partials/ajoutBatiment',['message' => $this->message]);
    }
    
    public function showBatiment()
    {
        $batiments = $this->recupBatiments();
        try
        {
            return view('partials/showBatiment',['batiments' => $batiments]);
 
        }
        catch(RequestException $e)
        {
            return redirect()->route('home',['error' => 'erreur']);
            // return response('Merci');
        }       
    }
    //Suppression
    public function showFormDeleteBatiment()
    {
        $batiments = $this->recupBatiments();
        return view('partials/deleteBatiment',['message' => $this->message,'batiments' => $batiments]);
    }

    public function deleteBatiment(Request $request)
    {
        $request = $request->input('batiment');
        $this->response = $this->user->delete('https://codificationesp.herokuapp.com/api/Batiments/'.$request);
        $batiments = $this->recupBatiments();
        $this->message = 'Batiment supprimé avec succès';
        return view('partials/deleteBatiment',['message' => $this->message, 'batiments' => $batiments]);
    }
}
