<?php

namespace App\Repositories;

use App\Models\ContactUs;
use Symfony\Component\HttpFoundation\Request;

class ContactUsRepository
{
    public function searchFromRequest(Request $request)
    {
        $contactUs = ContactUs::query()->orderByDesc("id");

        return $contactUs;
    }
}
