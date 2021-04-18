<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\ActiveModelService;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActiveModelController extends Controller
{
    protected $activeModelService;

    public function __construct(ActiveModelService $activeModelService)
    {
        $this->activeModelService = $activeModelService;
    }

    public function active(Request $request)
    {
        $result = $this->activeModelService->active($request);
        return response()->json($result);
    }


}
