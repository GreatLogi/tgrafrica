<?php
declare (strict_types = 1);
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $uuid)
    {
        $blog = Blog::where('uuid', $uuid)->firstOrFail();

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create the comment
        $comment = new Comment();
        $comment->uuid = (string) \Illuminate\Support\Str::uuid();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->message = $request->message;

        $blog->comments()->save($comment);
        // Optionally, you can redirect back to the blog post with a success message
        return redirect()->route('newssingle', ['uuid' => $uuid])->with('success', 'Comment posted successfully!');
    }
}
