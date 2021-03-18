<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BaseController extends Controller
{
  public function test() {

    // per prendere tutti gli id
    $beers = Beer::all();

    // per prendere il secondo id con il prezzo a 0.99
    // $b = Beer::where('price', '0.99')->get();
    // dd($b);

    // per prendere tutti i valori che non hanno il prezzo a 0.99
    // $b = Beer::where('price', '!=' , '0.99')->get();
    // dd($b);

    // per far ritornare solo un array dei due con limit
    // $b = Beer::where('price', '!=' , '0.99')
    //         ->limit(1)
    //         ->get();
    // dd($b);

    // per prendere tutti i valori che non hanno il prezzo a 0.99
    // e in maniera ordinata con l'orderBy
    // $b = Beer::where('price', '!=' , '0.99')
    //         ->orderBy('price', 'desc')
    //         ->get();
    // dd($b);

    // return view('home', ['beers' => $beers]);
    return view('test', compact('beers'));
  }
}
