<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactformrequest;
use App\Mail\contactform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("tofikdipsize1337228@yandex.ru")->send(new ContactForm($validated = $request->validated()));

        return redirect(route("contacts"));
    }
}
