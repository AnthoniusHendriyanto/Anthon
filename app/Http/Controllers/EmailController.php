<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        return view('components.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'comment' => 'required',
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        );

        Mail::to('AuctionPae@gmail.com')->send(new sendEmail($data));
        return back()->with(['success' => 'Email successfully sent! Thanks for contacting me']);
    }
}
