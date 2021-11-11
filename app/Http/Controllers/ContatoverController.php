<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoverController extends Controller
{
    public function contato(){
        return view('site.contatover');

    }
}
