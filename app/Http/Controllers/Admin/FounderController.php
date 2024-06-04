<?php
declare (strict_types = 1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class FounderController extends Controller
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
            'founder_prolfile' => 'required',
        ]);
        $data = new Founder();
        $data->founder_profile = $request->founder_profile;
        if ($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img->save(public_path('upload/founder/' . $name_gen));
            $data->image = 'upload/founder/' . $name_gen;
        }
        $data->save();
        $notification = [
            'message' => 'Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('site-index-founder')->with($notification);
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
        return redirect()->route('site-index-purpose')->with($notification);
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
