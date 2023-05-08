<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LucasController extends Controller
{
    public function about() {
        return view('about');
    }

    public function services() {
        $servicos = [];

        return view('services', compact('servicos'));
    }
}
