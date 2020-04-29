@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="hu">
<meta charset="UTF-8">

<div class="h1">
    Kérdez Felelek Történelem
</div>


<a href="login.php">
    <button>Belépés</button>
</a>



<style>
.h1{
    font-family: 'Indie Flower', cursive;
    font-size: 50px;
    color:black;
    position: relative;
    top: 150px;
    text-align: center;

}

body {
     background: url("https://cdn.hipwallpaper.com/m/8/51/MIzhZA.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;

}

button {
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: deepskyblue;
    border: 50px;
    font-size: 35px;
    font-family: sans-serif;
    margin: 0;
    position: absolute;
    margin-right: -50%;
    transform: translate(-50%, -50%)

}

</style>

@endsection
