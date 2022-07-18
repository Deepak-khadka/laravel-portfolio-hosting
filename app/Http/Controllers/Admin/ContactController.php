<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Foundation\Service\ContactService;

class ContactController extends Controller
{

    protected ContactService $service;

    public function __construct(ContactService $contactService)
    {
        $this->service = $contactService;
    }

    public function index()
    {
        $data = [];
        $data['contact_list'] = $this->service->contactLists(5);
        return view('admin.contact.index', compact('data'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }
}