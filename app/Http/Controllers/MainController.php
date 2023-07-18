<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model
use App\Models\Comic;

class MainController extends Controller
{
    //Index, ritorno tutti i dati della tabella e li metto in comics.index
    public function index()
    {
        // Passo al controller i dati che ci servono
        $comics = Comic::all();
        return view("home", compact("comics"));
    }
};
