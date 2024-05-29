<?php
declare (strict_types = 1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purpose;
use Illuminate\Http\Request;

class purposecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $purposes = Purpose::latest()->get();
        return view('admin.layouts.purpose.index', compact('purposes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'purpose' => 'required',
        ]);
        Purpose::create([
            'purpose' => $request->purpose,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'purposes Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-index')->with($notification);
    }

    public function edit($uuid)
    {
        $purposes = Purpose::where('uuid', $uuid)->first();
        if (!$purposes) {
            abort(404);
        }

        return view('admin.layouts.purpose.edit', compact('purposes'));
    }

    public function update(Request $request)
    {
        $purpose_id = $request->uuid;
        $purposes = Purpose::where('uuid', $purpose_id)->first();
        if (!$purposes) {
            abort(404);
        }
        $purposes->update([
            'purpose' => $request->purpose,
        ]);
        $notification = [
            'message' => 'purposes Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-index')->with($notification);
    }

    public function delete($uuid)
    {
        $purposes = Purpose::where('uuid', $uuid)->first();
        if (!$purposes) {
            abort(404);
        }
        $purposes->delete();
        $notification = [
            'message' => 'purposes Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
