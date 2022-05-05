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

    public function aboutpage()
    {
        return view('about');
    }

    public function projectspage()
    {
        return view('projects');
    }

    public function servivepage()
    {
        return view('service');
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function privacypage()
    {
        return view("privacy");
    }

    public function termspage()
    {
        return view("terms");
    }
    // set mail to .emt to work and set mail in Mail::to
    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("your email")->send(new ContactForm($validated = $request->validated()));

        return redirect(route("contacts"));
    }
}
