<?php

namespace App\Http\Services;

use App\Models\Interest;
use Symfony\Component\HttpFoundation\Request;

class InterestService
{
  
    public function fillFromRequest(Request $request, $interest = null)
    {
        if (!$interest) {
            $interest = new Interest();
        }

        $interest->fill($request->request->all());
        $interest->active = $request->get("active", 1);
        $interest->save();

        return $interest;
    }
  
}
