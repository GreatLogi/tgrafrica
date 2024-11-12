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
        // Embed the logo image as an attachment and reference it using a Content-ID (CID)
        return $this->from('investorscommunity@tgrafrica.com', 'TGR Africa')
            ->to($this->email)
            ->subject('TGR Prospectus Request')
            ->view('emails.prospertous')
            ->with([
                'requesterEmail' => $this->email,
                'pdfUrl' => $this->pdfUrl,
            ])
            ->attach(public_path('img/logo-default-slim.png'), [
                'as' => 'logo-default-slim.png', // Name of the file when attached
                'mime' => 'image/png', // MIME type of the image
                'contentId' => 'logo_default_slim' // CID for referencing in the HTML
            ]);
    }

    // public function build()
    // {
    //     return $this
    //         ->from('investorscommunity@tgrafrica.com', 'TGR Africa')
    //         ->to($this->email)
    //         ->subject('TGR Prospectus Request')
    //         ->view('emails.prospertous')
    //         ->with([
    //             'requesterEmail' => $this->email,
    //             'pdfUrl' => $this->pdfUrl,
    //         ]);
    // }

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
