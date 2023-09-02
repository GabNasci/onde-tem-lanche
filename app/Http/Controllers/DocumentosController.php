<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function privacy() {
        return view('politica-de-privacidade');
    }

    public function terms() {
        return view('termos');
    }
}
