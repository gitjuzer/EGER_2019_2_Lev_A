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
    width:600px;
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
   <h3 align="center">Új válasz feltöltése feltöltése</h3><br />

   <form method="post" action="{{ url('/NewAnswer') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Válasz</label>
     <input type="text" name="answer" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Feltöltés" />
    </div>
   </form>
  </div>
 </body>
</html>



@endsection
