<?php

namespace App\Repositories;

use App\Models\Country;
use Symfony\Component\HttpFoundation\Request;

class CountryRepository
{
    public function searchFromRequest(Request $request)
    {
        $countries = Country::query()->orderByDesc("id");

        return $countries;
    }
}
