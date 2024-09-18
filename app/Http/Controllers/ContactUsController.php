<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserConfirmationMail; // Ensure this is the correct mailable class
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('admin.layouts.contactus.contact_us');
    }

    // public function store(Request $request)
    // {
    //     // Validate request data
    //     $validated = $request->validate([
    //         'full_name' => 'required',
    //         'email' => 'required|email',
    //         'country_of_residence' => 'required',
    //         'nationality' => 'required',
    //         'message' => 'required',
    //         'subject' => 'required',
    //     ]);

    //     // Save the data to the database
    //     ContactUs::create([
    //         'full_name' => $request->full_name,
    //         'email' => $request->email,
    //         'country_of_residence' => $request->country_of_residence,
    //         'nationality' => $request->nationality,
    //         'subject' => $request->subject,
    //         'message' => $request->message,
    //     ]);


    //     // Redirect back with a success message
    //     return redirect()->back()->with('success', 'Your message has been sent successfully!');
    // }
    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'country_of_residence' => 'required',
            'nationality' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ]);

        // Save the data to the database
        ContactUs::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'country_of_residence' => $request->country_of_residence,
            'nationality' => $request->nationality,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Email content
        $messageContent = [
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'country_of_residence' => $validated['country_of_residence'],
            'nationality' => $validated['nationality'],
            'subject' => $validated['subject'],
            'message' => $validated['message']
        ];
        // Send email to admin
        Mail::to('info@tgrafrica.com')->send(new \App\Mail\ContactUsNotification($messageContent));
        // Send auto-reply to the user
        Mail::to($validated['email'])->send(new \App\Mail\AutoReplyNotification($messageContent));
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }

    public function thankyoucontact()
    {
        return view('website.thankyoucontact');
    }
}
