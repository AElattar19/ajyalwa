<?php

namespace App\Http\Services;

use App\Models\Social;
use Symfony\Component\HttpFoundation\Request;

class SocialService
{
  
    public function fillFromRequest(Request $request, $social = null)
    {
        if (!$social) {
            $social = new Social();
        }

        $social->fill($request->request->all());
        $social->active = $request->get("active", 1);
        $social->save();

        return $social;
    }
  
}
