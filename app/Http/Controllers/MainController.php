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
        $comics = Comic::all();

        return view("comic.index", compact("comics"));
    }

    public function show($id){
        $comic = Comic :: findOrFail($id);
        return view('show')
    }
}
