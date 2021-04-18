<?php

namespace App\Repositories;

use App\Models\City;
use Symfony\Component\HttpFoundation\Request;

class CityRepository
{
    public function searchFromRequest(Request $request)
    {
        $cities = City::query()->orderByDesc("id");

        return $cities;
    }
}
