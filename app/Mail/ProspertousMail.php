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
    
    // public function __construct($email, $pdfPath)
    // {
    //     $this->email = $email;
    //     $this->pdfPath = $pdfPath;
    // }

    // public function build()
    // {
    //     return $this
    //         ->mailer('investors')
    //         ->to($this->email)
    //         ->subject('TGR Prospectus Request')
    //         ->attach($this->pdfPath, [
    //             'as' => 'Investors_Prospectus.pdf',
    //             'mime' => 'application/pdf',
    //         ])
    //         ->view('emails.prospertous')
    //         ->with(['requesterEmail' => $this->email]);
    // }
    // public function build()
    // {
    //     return $thisgit
    //         ->from('info@tgrafrica.com', 'TGR Africa')
    //         ->to($this->email)
    //         ->subject('TGR Prospertous Request')
    //         ->attach($this->pdfPath, [
    //             'as' => 'Investors_Prospectus.pdf',
    //             'mime' => 'application/pdf',
    //         ])
    //         ->view('emails.prospertous')
    //         ->with(['requesterEmail' => $this->email]);
    // }

    // public function build()
    // {
    //     return $this->to($this->email)
    //         ->subject('TGR Prospertous')
    //         ->attach($this->pdfPath, [
    //             'as' => 'prospertous.pdf',
    //             'mime' => 'application/pdf',
    //         ])
    //         ->view('emails.prospertous');
    // }
}
