<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Mail\ProspertousMail;
use App\Models\ProspertousRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProspertousRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:prospertous_requests,email',
        ]);
        // Save the email to the database
        $prospertousRequest = new ProspertousRequest();
        $prospertousRequest->email = $request->email;
        $prospertousRequest->save();
        $pdfPath = public_path('upload/prospertous/Blue Simple Professional CV Resume.pdf');
        Mail::send(new ProspertousMail($request->email, $pdfPath));
        return response()->json(['message' => 'Prospertous PDF sent successfully!']);
    }
}
