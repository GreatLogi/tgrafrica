<?php
declare (strict_types = 1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class missioncontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $missions = Mission::latest()->get();
        return view('admin.layouts.mission.index', compact('missions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mission' => ['required', Rule::unique('categories')],
        ]);
        Mission::create([
            'mission' => $request->vision,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'visions Inserted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-index')->with($notification);
    }

    public function edit($uuid)
    {
        $visions = Mission::where('uuid', $uuid)->first();
        if (!$visions) {
            abort(404);
        }
        return view('admin.layouts.vision.edit', compact('visions'));
    }

    public function update(Request $request)
    {
        $vision_id = $request->uuid;
        $visions = Mission::where('uuid', $vision_id)->first();
        if (!$visions) {
            abort(404);
        }
        $visions->update([
            'mission' => $request->mission,
        ]);
        $notification = [
            'message' => 'missions Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('view-index')->with($notification);
    }

    public function delete($uuid)
    {
        $missions = Mission::where('uuid', $uuid)->first();
        if (!$missions) {
            abort(404);
        }
        $missions->delete();
        $notification = [
            'message' => 'missions Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}
