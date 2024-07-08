<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeSeminarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'video' => 'required|file|mimes:mp4,mov,ogg,qt', // Adjust file size limit as needed
    //     ]);

    //     if ($request->hasFile('video')) {
    //         $videoPath = $request->file('video')->store('upload/seminars', 'public');
    //     }

    //     Seminar::create([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'video' => $videoPath,
    //     ]);
    //     return redirect()->route('seminars.index')->with('success', 'Seminar added successfully.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'required|file|mimes:mp4,mov,ogg,qt', // Adjust file size limit as needed
        ]);
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $name_gen = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
            $videoPath = 'upload/seminars/' . $name_gen;
            $video->move(public_path('upload/seminars'), $name_gen);
        }
        Seminar::create([
            'title' => $request->title,
            'description' => $request->description,
            'video' => $videoPath,
        ]);

        return redirect()->route('seminarsindex')->with('success', 'Seminar added successfully.');
    }

    public function index()
    {
        // $seminars = Seminar::all();
        // return view('admin.layouts.advisory.tgrseminars.index', compact('seminars'));
        $user = Auth::user();
        $seminars = Seminar::all();

        foreach ($seminars as $seminar) {
            $seminar->isSubscribed = Subscription::where('user_id', $user->id)
                ->where('seminar_id', $seminar->id)
                ->exists();
        }
        return view('admin.layouts.advisory.tgrseminars.index', compact('seminars'));
    }

    public function subscribe(Seminar $seminar)
    {
        $user = Auth::user();

        Subscription::firstOrCreate([
            'user_id' => $user->id,
            'seminar_id' => $seminar->id,
        ]);
        return redirect()->route('seminarsindex', $seminar->id)->with('success', 'You have subscribed to this seminar.');
    }

    public function show(Seminar $seminar)
    {
        $user = Auth::user();
        $isSubscribed = Subscription::where('user_id', $user->id)
            ->where('seminar_id', $seminar->id)
            ->exists();

        return view('admin.layouts.advisory.tgrseminars.show', compact('seminar', 'isSubscribed'));
    }
}
