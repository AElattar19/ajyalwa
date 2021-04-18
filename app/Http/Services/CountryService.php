<?php

namespace App\Http\Services;

use App\Models\Country;
use Symfony\Component\HttpFoundation\Request;

class CountryService
{
  
    public function fillFromRequest(Request $request, $country = null)
    {
        if (!$country) {
            $country = new Country();
        }

        $country->fill($request->request->all());
        $country->active = $request->get("active", 1);
        $country->save();

        return $country;
    }
  
}
