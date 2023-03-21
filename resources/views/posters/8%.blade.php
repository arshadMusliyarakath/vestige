@extends('layouts.theme')
@section("content")

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
<link href="{{ asset('/css/8%.css') }}" rel="stylesheet">

<div class="content-area" id="main">
            <img class='poster_bg' src="{{ asset('/images/8%.jpg') }}" alt="">
            <div class="matter">
                <div class="inner-matter">
                    <img class='dp' src="{{ asset('/storage/uploades/'.$data['image']) }}" alt="">
               
                </div>
            </div>
            <div class="titles">
                <div class="name_area"><h2>{{ Str::title($data['gender']) }} <br> <span>{{ Str::title($data['name']) }}</span></h2></div>
                <h3>- {{ Str::title($data['place']) }}</h3>
            </div>
        </div>
        
        <style>
            body{
                font-family: 'Playfair Display', serif;
            }
            
        </style>

@endsection