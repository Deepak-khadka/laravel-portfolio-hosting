<?php

namespace Foundation\Service;

use App\Models\Contact;

class ContactService extends BaseService
{

    protected $model;

    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }

    public function contactLists($paginateLimit = 10)
    {
        return $this->model->latest()->paginate($paginateLimit);
    }

}