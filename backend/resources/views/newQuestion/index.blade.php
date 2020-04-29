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
  <div class="container box">
   <h3 align="center">Új kérdés feltöltése</h3><br />


   <form method="post" action="{{ url('/NewQuestion/create') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Kérdés</label>
     <input type="question" name="question" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Feltöltés" />
    </div>
   </form>
  </div>
 </body>
</html>



@endsection
