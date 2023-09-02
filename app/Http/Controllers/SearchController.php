<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Establishment;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $categories = Category::all();
        $establishments = Establishment::all();

        $param = $request->input('busca'); // pizza chef
        if(isset($param)) {
            $establishments= Establishment::query()->where('nome', 'like', '%'.$param.'%')->get();
        }

        return view('busca')->with(compact(['categories', 'establishments']));

    }

    public function mapa() {

        return view('mapa');
    }
}
