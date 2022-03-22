<?php

namespace App\Http\Controllers;

use App\Mail\AttachmentsMail;
use Illuminate\Support\Facades\Mail;

class AskController extends Controller
{
    public function __invoke()
    {
        return view('askQuestion');
    }

    public function store()
    {
        Mail::to('bitacademyquestions@gmail.com')->send(new AttachmentsMail());
        return redirect('/');
    }
}
