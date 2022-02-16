<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function postcardCreate() {

        return view('pages.createpostcard');
    }
    public function postcardStore(Request $request) {

        $data = $request -> all();

        dd($data);
    }
}
