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
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{action('SendEmailController@direct')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Your Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
      <label>Enter Your Email</label>
      <input type="email" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
@endsection