<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Foundation\Lib\Pages;
use App\Http\Requests\ContactFormRequestStore;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function getPageName($pageName)
    {
        if (array_key_exists($pageName, Pages::$current)) {
            return view('frontend.'.$pageName);
        }

        return redirect()->route('home');

    }

    public function submitContact(ContactFormRequestStore $request)
    {
        $validatedData = $request->validated();
        Contact::create($validatedData);

        Http::post(config('neputer.web_hook'), [
            'content' => $validatedData['subject'] ." by ( " . $validatedData['full_name'] . ")",
            'embeds' => [
                [
                    'title' => "Email : ". $validatedData['email'],
                    'description' => $validatedData['description'],
                    'color' => '7506394',
                ]
            ],
        ]);

        return redirect()->back();

    }
}
