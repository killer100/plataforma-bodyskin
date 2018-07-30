<?php

namespace App\Services;
use Mail;

class EmailService
{
    
    public function SendEmail($view, $data, $destinatario, $asunto){
        Mail::send($view, $data, function ($message) use($destinatario, $asunto) {
            $message->from('desenrrollate@bodyskin.com.pe', 'Bodyskin');
            $message->to($destinatario);
            $message->subject($asunto);
        });
    }
}
