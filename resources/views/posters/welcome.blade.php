@extends('layouts.theme')
@section("content")

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link href="{{ asset('/css/welcome.css') }}" rel="stylesheet">


        <div class="content-area" id="welcome">
            <img class='poster_bg' src="{{ asset('/images/welcome.jpg') }}" alt="">
            <div class="matter">
                <div class="inner-matter">
                    <img class='dp' src="{{ asset('/storage/uploades/'.$data['image']) }}" alt="">
                <div class="titles">
                    <div class="name_area"><h2>{{ $data['gender']." ".$data['name'] }}</h2></div>
                    <h3>{{ $data['place'] }}</h3>
                </div>
                </div>
            </div>
        </div>
        
        


        <style>
            body{
                font-family: 'Montserrat', sans-serif;
            }
        </style>

@endsection