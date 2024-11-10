<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Mail\ProspertousMail;
use App\Models\ProspertousRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProspertousRequestController extends Controller
{
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|unique:prospertous_requests,email',
    //     ]);
    //     // Save the email to the database
    //     $prospertousRequest = new ProspertousRequest();
    //     $prospertousRequest->email = $request->email;
    //     $prospertousRequest->save();
    //     $pdfPath = public_path('upload/prospertous/Blue Simple Professional CV Resume.pdf');
    //     Mail::send(new ProspertousMail($request->email, $pdfPath));
    //     return redirect()->back()->with('success', 'Prospertous PDF sent successfully!');
    //     // return response()->json(['message' => 'Prospertous PDF sent successfully!']);
    // }
    public function index()
    {
        $data = ProspertousRequest::latest()->paginate(10);
        return view('admin.layouts.listofquestedpropertus.prospertusquested', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Save the email to the database
        $prospertousRequest = new ProspertousRequest();
        $prospertousRequest->email = $request->email;
        $prospertousRequest->save();

        // Define the PDF URL
        // $pdfUrl = asset('upload/prospertous/Investors_Prospectus.pdf');
        $pdfUrl = url('upload/prospertous/Investors_Prospectus.pdf');
        // Send the email with the PDF link
        Mail::mailer('investors')->to($request->email)->send(new ProspertousMail($request->email, $pdfUrl));

        return redirect()->back()->with('success', 'Prospectus PDF link sent successfully!');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //     ]);
    //     // Save the email to the database
    //     $prospertousRequest = new ProspertousRequest();
    //     $prospertousRequest->email = $request->email;
    //     $prospertousRequest->save();
    //     // Define the PDF path
    //     $pdfPath = public_path('upload/prospertous/Investors_Prospectus.pdf');
    //     // Send the email with the PDF attached
    //     Mail::mailer('investors')->to($request->email)->send(new ProspertousMail($request->email, $pdfPath));

    //     return redirect()->back()->with('success', 'Prospectous PDF sent successfully!');
    // }
    // Mail::send(new ProspertousMail($request->email, $pdfPath));
    // Redirect back with a success message
}
