<?php

namespace App\Mail;

use App\Models\Pie;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Sitio Web";
    public $contacto;

    public function __construct($contacto)
    {
        $this->contacto=$contacto;
    }

    /**
     * Build the message.
     *8
     * @return $this
     */
    public function build()
    {
        $datos['pies']=Pie::paginate(1);
        return $this->view('emails.contactanos',$datos);
    }
}