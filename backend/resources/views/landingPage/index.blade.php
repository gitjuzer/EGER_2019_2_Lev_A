@extends('layouts.baseLayout')
@section('content')
    <style>
        #landingContainer {
            /*Képernyő magasság - menü magasság*/
            height: calc( 100vh - 56px );
            width: 100%;
            /*Háttér*/
            background-image: url("/img/bottomleft.png"), url("/img/topright.png");
            background-position: bottom left, top right;
            background-repeat: no-repeat;
            background-size: 42vh;
            /*Szöveg középre igazítása*/
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            /*Szöveg formázása*/
            font-size: 2rem;
            font-weight: bold;
        }
    </style>

    <div id="landingContainer">
        <div class="text-center">Játékos tanulás, fiataloknak!</div>
        <button class="btn btn-lg btn-primary mt-4">
            Regisztrálok
        </button>
    </div>
@endsection
