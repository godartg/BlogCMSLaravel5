@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 
@section('content')
   <h3 align="center">How Send an Email in Laravel</h3><br />
   
   <form action="{{action('SendEmailController@direct')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="to" class="form-control" value="" />
      </div>
      <label>Enter Your Message</label>
      <textarea name="message" class="form-control"></textarea>
      <input type="submit" name="send" class="btn btn-info" value="Send" />
      </div>
      

   </form>
@endsection