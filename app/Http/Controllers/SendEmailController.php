<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Http\Controllers\Controller;


class SendEmailController extends Controller
{
    function index(){
        return view ('correo.home');
    }
    function send(Request $request){
        $this->validate($request,[
            'name'  =>  'required',
            'email' =>  'required|email',
            'message'=> 'required'
        ]);
        
        $name      =  $request->name;
        $email     =  $request->email;
        $message   =  $request->message;
        
        Mail::to($name)->send( new SendMail($email, $message));
        

        //Mail::send('correo.sendmail', compact($name, $message), function($message){
        //    $message->from($request->email, $request->name);
        //});
        echo "HTML ahora revisa";
    }
    function direct(){
        Mail::send(new SendMail());
        
    }
    function email(){
        return view('correo.email');
    }
    
}
