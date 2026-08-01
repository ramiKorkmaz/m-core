<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request): RedirectResponse
    {
        $contact = Contact::create([
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->phone,
            'message' => $request->message,
            'status' => Contact::STATUS_NEW,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        // Пока SMTP не настроен
        // Mail::to(config('mail.contact_address'))
        //     ->send(new ContactMail($contact));

        return back()->with('success', 'Заявка успешно отправлена.');
    }
}
