<?php


namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $details = ['servizio1', 'servizio2', 'servizio3'];
        return view('index', ['details' => $details]);
    }
    public function contactUs()
    {
        return view('contact-us');
    }
    public function show($services)
    {
        return view('show', ['services' => $services]);
    }
    public function store(Request $request)
    {
        $request->validate(['email' => 'required', 'email', 'password' => 'required', 'message' => 'required']);
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'message' => $request->message
        ];
        Mail::to($data['email'])->send(new infoMail($data));
        return redirect()->route('index')->with('success', 'Email inviata');
    }
}
