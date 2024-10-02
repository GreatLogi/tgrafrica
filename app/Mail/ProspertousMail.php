<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProspertousMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $pdfPath;

    public function __construct($email, $pdfPath)
    {
        $this->email = $email;
        $this->pdfPath = $pdfPath;
    }

    public function build()
    {
        return $this->to($this->email)
            ->subject('TGR Prospertous')
            ->attach($this->pdfPath, [
                'as' => 'prospertous.pdf',
                'mime' => 'application/pdf',
            ])
            ->view('emails.prospertous');
    }
}
