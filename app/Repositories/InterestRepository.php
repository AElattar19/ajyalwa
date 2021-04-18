<?php

namespace App\Repositories;

use App\Models\Interest;
use Symfony\Component\HttpFoundation\Request;

class InterestRepository
{
    public function searchFromRequest(Request $request)
    {
        $interests = Interest::query()->orderByDesc("id");

        return $interests;
    }
}
