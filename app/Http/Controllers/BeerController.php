<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();

      return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validazione dati
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'alcohol_content' => 'numeric',
            'price' => 'required|numeric',
            'cover' => 'required',
            ]);

        // metodo all() per avere tutte le coppie name-value in un array
        $data = $request->all();

        /* Versione base */
        // $beer = new Beer();
        // $beer->brand = $data['brand'];
        // $beer->type = $data['type'];
        // $beer->alcohol_content = $data['alcohol_content'];
        // $beer->price = $data['price'];
        // $beer->cover = $data['cover'];
        // $beer->save();

        /* Altra versione più pulita */
        /*
        nuovo oggetto Beer, poi fill dell'array delle coppie generate dal form
        poi dopo aver messo il protected $fillable nel model, salvi i dati nel db con save()
        */
        $beer = new Beer();
        $beer->fill($data);
        $beer->save();

        // ritorno alla root show facendo vedere l'ultimo oggetto aggiunto dalla form
        $beerStored = Beer::orderBy('id', 'desc')->first();

        return redirect()->route('beers.show', $beerStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
