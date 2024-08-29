<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index()
    {

        return view('admin.layouts.contactus.contact_us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'country_of_residence' => 'required',
            'nationality' => 'required',
            'message' => 'required',
            'subject' => 'required',
        ]);
        ContactUs::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'country_of_residence' => $request->country_of_residence,
            'nationality' => $request->nationality,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $notification = [
            'message' => 'Your message has been sent to us.',
            'alert-type' => 'success',
        ];
        return redirect()->route('contact-thank-you-message')->with($notification);
    }
    public function thankyoucontact()
    {
        return view('website.thankyoucontact');
    }
}
