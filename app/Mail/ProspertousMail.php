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

        config([
            'mail.mailers.smtp.username' => 'investorscommunity@tgrafrica.com',
            'mail.mailers.smtp.password' => 'L@k3S!d33st@t3',
            'mail.from.address' => 'investorscommunity@tgrafrica.com',
        ]);
        return $this->from('investorscommunity@tgrafrica.com')
            ->to($this->email)
            ->subject('TGR Prospertous Request')
            ->attach($this->pdfPath, [
                'as' => 'prospertous.pdf',
                'mime' => 'application/pdf',
            ])
            ->view('emails.prospertous')
            ->with(['requesterEmail' => $this->email]);
    }

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
