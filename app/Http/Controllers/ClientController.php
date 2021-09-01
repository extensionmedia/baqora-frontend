<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function get_phone(Client $client){
        return view('annonce.show.partials.phone', ['client'=>$client]);
    }

    public function create(){
        return view('client.create');
    }

    public function store(Request $r){
        $rules = [
            'nom' => 'required|max:255',
            'telephone_01' => 'required|max:100',
            'email' => 'required|max:255',
            'pwd'   =>  'required'
        ];
        $messages = [
            'required' => ':attribute ne peut pas etre vide'
        ];

        $this->validate($r, $rules, $messages);
        return view('client.thankyou');
    }
}
