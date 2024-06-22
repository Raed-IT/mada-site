<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $setting= Setting::first();
        return view('contacts')->with(['setting'=>$setting]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:6',
            'name' => 'required|min:3',
        ]);
        Contact::create([
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'message' => $validatedData['message'],

        ]);
        return back()->with('success', "Thanks for leave a massage");
    }
}
