<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importo il model
use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view("home", compact("comics"));
    }


    // Definisco la show
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view("show", compact("comic"));
    }

    // Definisco la create e il relativo store
    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        // Inserisco la validate
        $data = $request->validate(
            [
                'title' => 'required|max:64',
                'description' => 'nullable|max:255',
                'thumb' => 'nullable|max:64',
                'price' => 'required',
                'series' => 'required|max:255',
                'sale_date' => 'required',
                'type' => 'required|max:255'
            ],
            [
                'title.required' => 'È Necessario inserire il nome',
                'title.max' => 'Il titolo non puà superare i 64 caratteri',

                'description.max' => 'La descrizione non puà superare i 255 caratteri',

                'price.required' => 'È Necessario inserire il prezzo',

                'series.required' => 'È Necessario inserire il nome',
                'series.max' => 'Il titolo non puà superare i 255 caratteri',

                'sale_date.required' => 'È Necessario inserire la data',

                'type.required' => 'È Necessario inserire la tipologia',
                'type.max' => 'Il titolo non puà superare i 255 caratteri',


            ]
        );

        // Posso inserire dei campi required per i valori in ingresso
        $comic = Comic::create($data);

        // return redirect()->route("show", $comic->id);
        return redirect()->route("index");
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view("edit", compact("comic"));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('show', $comic->id);
    }

    public function delete($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route("index");
    }
};
