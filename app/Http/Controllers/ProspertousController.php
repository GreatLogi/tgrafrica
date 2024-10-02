<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\Prospertous;
use Illuminate\Http\Request;

class ProspertousController extends Controller
{
    public function index()
    {

        $prospertousFiles = Prospertous::get();
        return view('admin.layouts.prospertous.index', compact('prospertousFiles'));
    }

    public function create()
    {
        return view('admin.layouts.prospertous.create');
    }
    // public function store(Request $request)
    // {
    //     // Validate the file upload
    //     $request->validate([
    //         'prospertous' => 'required|mimes:pdf',
    //     ]);
    //     $prospertous_save_url = null;
    //     if ($request->hasFile('prospertous')) {
    //         $file = $request->file('prospertous');
    //         $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('upload/prospertous'), $name_gen);
    //         $prospertous_save_url = 'upload/prospertous/' . $name_gen;
    //         $prospertous = new Prospertous();
    //         $prospertous->prospertous = $name_gen;
    //         $prospertous->save();
    //         return back()->with('success', 'Prospertous PDF uploaded successfully.');
    //     }
    // }

    public function store(Request $request)
    {
        // Validate the file upload
        $request->validate([
            'prospertous' => 'required|mimes:pdf',
        ]);

        // Initialize variable to store the file path
        $prospertous_save_url = null;

        // Check if a file was uploaded
        if ($request->hasFile('prospertous')) {
            $file = $request->file('prospertous');

            // Get the original file name
            $original_name = $file->getClientOriginalName();

            // Move the uploaded file to 'upload/prospertous/' directory with the original name
            $file->move(public_path('upload/prospertous'), $original_name);

            // Save the file path (relative to the public folder) in the 'prospertous' column
            $prospertous_save_url = 'upload/prospertous/' . $original_name;

            // Create a new Prospertous instance and save the original file name
            $prospertous = new Prospertous();
            $prospertous->prospertous = $prospertous_save_url; // Save the path in the prospertous column
            $prospertous->save();

            // Return success message
            return redirect()->route('prospertous-index')->with('success', 'Created successfully.');
        }

        // If no file was uploaded, return an error
        return back()->with('error', 'Failed to upload the PDF file.');
    }

}
