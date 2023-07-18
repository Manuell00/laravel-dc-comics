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


    public function show($id)
    {
        // Vado a recuperare l'elemento id dal db grazie al findOrFail
        $comic = Comic::findOrFail($id);
        return view("show", compact("comic"));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $comic = Comic::create([
            'title' => $data["title"],
            'description' => $data["description"],
            'thumb' => $data["thumb"],
            'price' => $data["price"],
            'series' => $data["series"],
            'sale_date' => $data["sale_date"],
            'type' => $data["type"]
        ]);

        // return redirect()->route("show", $comic->id);
        return redirect()->route("index");
    }
};
