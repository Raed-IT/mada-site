<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'comment' => 'required|min:6',
        ]);
        Blog::findOrFail($id)->comments()->create([
            'email' => $validatedData['email'],
            "comment" => $validatedData['comment'],
        ]);
        return back()->with('success', "Thanks For Leave Comment ");
    }
}
