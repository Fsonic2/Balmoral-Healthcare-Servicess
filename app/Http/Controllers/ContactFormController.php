<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to the database
        $contactForm = ContactForm::create($validated);

        // Send the email
        Mail::to('complain@balmoralhealthcareservices.com')->send(new ContactFormMail($validated));

        return response()->json(['message' => 'Contact form submitted successfully!'], 200);
    }
}
