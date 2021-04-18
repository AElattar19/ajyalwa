<?php

namespace App\Repositories;

use App\Models\License;
use Symfony\Component\HttpFoundation\Request;

class LicenseRepository
{
    public function searchFromRequest(Request $request)
    {
        $licenses = License::query()->orderByDesc("id");

      if ($request->filled('user_id') ) {
            $licenses->where('user_id', $request->get('user_id')) ;
        }
        return $licenses;
    }
}
