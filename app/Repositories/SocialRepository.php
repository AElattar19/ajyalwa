<?php

namespace App\Repositories;

use App\Models\Social;
use Symfony\Component\HttpFoundation\Request;

class SocialRepository
{
    public function searchFromRequest(Request $request)
    {
        $socials = Social::query()->orderByDesc("id");

        return $socials;
    }
}
