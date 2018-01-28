<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function __construct(Client $client)
    {
        $this->middleware('auth');
    }
}
