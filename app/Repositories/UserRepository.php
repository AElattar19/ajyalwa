<?php

namespace App\Repositories;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class UserRepository
{
    public function searchFromRequest(Request $request)
    {
        $users = User::query()->orderByDesc("id");

        if ($request->filled('type')) {
            $users->where('type', '=', $request->get("type"));
        }
        if ($request->filled('active')) {
            $users->where('active', '=', $request->get("active"));
        }
     


  

        return $users;
    }
}
