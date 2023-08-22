<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSetting;
use App\Models\SeoSetting;
use App\Models\Contact;
use App\Mail\ContactMailer;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $settings = ContactSetting::firstOrFail();
        return view('contact', compact('settings'));
    }

    public function createContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        // send the email to the admin
        Contact::create($request->all());

        $mailData = [
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->company,
            'subject' => $request->subject,
            'content' => $request->content,
        ];
        
        Mail::to(SeoSetting::firstOrFail()->contact_email)->send(new ContactMailer($mailData));

        return redirect()->route('contact')
            ->with('success', 'Message sent successfully.');
    }
}
