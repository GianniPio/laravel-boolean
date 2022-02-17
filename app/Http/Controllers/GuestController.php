<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function postcardCreate() {

        return view('pages.createpostcard');
    }
    public function postcardStore(Request $request) {

        $data = $request -> validate([

            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
        ]);

        $imageFile = $data['image'];
        // $imageFile = $request -> file('image'); oppure cosi
        $imageName = rand(10000, 999999) . '_'. time() . '.' . $imageFile -> getClientOriginalExtension();

        // $imageFile -> storeAs('/postcards/', $imageFile -> getClientOriginalName(), 'public');
        $imageFile -> storeAs('/postcards/', $imageName, 'public');

        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');

    }
}
