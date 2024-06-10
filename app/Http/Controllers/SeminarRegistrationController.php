<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\SeminarRegistration;
use Illuminate\Http\Request;

class SeminarRegistrationController extends Controller
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
            'job_subcategory' => 'required',
            'job_category' => 'required',
            'subscription_amount' => 'required|numeric',
            'seminar_count' => 'required',
        ]);
        SeminarRegistration::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'country_of_residence' => $request->country_of_residence,
            'nationality' => $request->nationality,
            'job_category' => $request->job_category,
            'job_subcategory' => $request->job_subcategory,
            'subscription_amount' => $request->subscription_amount,
            'seminar_count' => $request->seminar_count,
        ]);
        $notification = [
            'message' => 'Your Subscription Message  has been sent to us.',
            'alert-type' => 'success',
        ];

        return redirect()->route('seminar')->with($notification);
    }
}
