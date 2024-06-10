<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('admin.layouts.advisory.tgrbrainstorm.brainstormchat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $message = Message::create([
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        broadcast(new MessageSent(Auth::user(), $message))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }
}
