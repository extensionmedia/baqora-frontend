<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    //

    public function get_phone(Client $client){
        return view('annonce.show.partials.phone', ['client'=>$client]);
    }
}
