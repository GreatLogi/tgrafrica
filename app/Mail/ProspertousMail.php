<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProspertousMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $pdfUrl;
    public function __construct($email, $pdfUrl)
    {
        $this->email = $email;
        $this->pdfUrl = $pdfUrl;
    }

    public function build()
    {
        return $this
            ->from('investorscommunity@tgrafrica.com', 'TGR Africa')
            ->to($this->email)
            ->subject('TGR Prospectus Request')
            ->view('emails.prospertous')
            ->with([
                'requesterEmail' => $this->email,
                'pdfUrl' => $this->pdfUrl,
            ]);
    }
}
