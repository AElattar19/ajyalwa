<?php

namespace App\Http\Services;

use App\Models\ContactUs;
use Symfony\Component\HttpFoundation\Request;

class ContactUsService
{
  
    public function fillFromRequest(Request $request, $contactUs = null)
    {
        if (!$contactUs) {
            $contactUs = new ContactUs();
        }

        $contactUs->fill($request->request->all());
        $contactUs->active = $request->get("active", 1);
        $contactUs->save();

        return $contactUs;
    }
  
}
