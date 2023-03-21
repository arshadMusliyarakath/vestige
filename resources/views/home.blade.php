@extends('layouts.theme')
@section("content")
<div class="Main-BG" style="background-image: url('{{ asset('/images/mainBG.webp') }}')">
    <div class="container">
     <div class="row">
         <ul>
             <li class=""><a href="{{ route('form','Welcome') }}" class="btn btn-danger">Welcome Poster</a></li>
             <li class=""><a href="{{ route('form','8%') }}" class="btn btn-success">8% Poster</a></li>
             <li class=""><a href="#" class="btn btn-warning">10% Poster</a></li>
             <li class=""><a href="#" class="btn btn-primary">Bronze Director</a></li>
             <li class=""><a href="#" class="btn btn-primary">Silver Director</a></li>
             <li class=""><a href="#" class="btn btn-primary">Gold Director</a></li>
             <li class=""><a href="#" class="btn btn-primary">Star Director</a></li>
             <li class=""><a href="#" class="btn btn-primary">Diamond Director</a></li>
             <li class=""><a href="#" class="btn btn-primary">Crown Director</a></li>
         </ul>
     </div>
    </div>
 </div>

 <style>
    .Main-BG {
    height: 100vh;
    background-position: center;
    background-size: cover;
    text-align: center;
    padding-top: 40px;
}
.Main-BG ul li {
    margin-bottom: 11px;
    list-style: none;
}
 </style>
@endsection