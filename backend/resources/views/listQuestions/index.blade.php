@extends('layouts.app')
@section('content')
{{-- Ide jöhet a html + php content --}}


<!DOCTYPE html>
<html>
 <head>
  <title>Új kérdés hozzáadása</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:900px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />   

  @if(isset($uploaded))
    <div class="alert alert-success" role="alert">
        A válasz sikeresen fel lett véve az adatbázisba.
        </div>
  @endif

  <div class="container box">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kérdés</th>
        <th scope="col">Hozzáadva</th>
      </tr>
    </thead>
    <tbody>
    @foreach($question as $key => $data)
      <tr>  
        <th scope="row">{{$data->id}}</th>  
        <th>{{$data->question}}</th>
        <th>{{date("Y-m-d H:i:s",intval($data->created_at))}}</th>          
      </tr>
  @endforeach
  </tbody>
  </table>
  </div>
 </body>
</html>



@endsection
