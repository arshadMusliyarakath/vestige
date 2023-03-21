<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrondEndController extends Controller
{
    public function homeScreen()
    {
        return view('home');
    }
    public function Form($poster)
    {
        $poster_type = $poster;
        return view('form', compact('poster_type'));
    }
    public function formSubmited()
    {


        if (request()->hasFile('image')) {
            $extnsion = request('image')->extension();
            $filename = request('name'). time() . '.' . $extnsion;
            request('image')->storeAs('uploades', $filename);
            $input['image'] = $filename;
        }
        
        $name = Str::upper(request('name'));
        $data = [
            'gender' => request('gender'),
            'name' => $name,
            'place' => Str::upper(Str::lower(request('place'))),
            'image' => $filename

        ];
        $poster = request('poster_type');
        if($poster=='Welcome'){$setView = 'posters.welcome';}
        elseif($poster=='8%'){$setView = 'posters.8%';}
        return view($setView, compact('data'));
    }
}
