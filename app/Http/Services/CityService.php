<?php

namespace App\Http\Services;

use App\Models\City;
use Symfony\Component\HttpFoundation\Request;

class CityService
{
  
    public function fillFromRequest(Request $request, $city = null)
    {
        if (!$city) {
            $city = new City();
        }

        $city->fill($request->request->all());
        $city->active = $request->get("active", 1);
        $city->save();

        return $city;
    }
  
}
