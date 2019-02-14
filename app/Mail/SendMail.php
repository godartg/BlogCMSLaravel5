<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\user;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(){
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        //$user = user::find(1);
        $data=['name'=>$request->name, 'message'=>$request->message];
        return $this->view('correo.sendmail')->with(compact('data'))->to( $request->email);
        //return $this->view('correo.sendmail', ['name'=>$request->name, 'message'=>$request->message])->to( $request->email);
        //return $this->view('correo.sendmail');
    }
}
