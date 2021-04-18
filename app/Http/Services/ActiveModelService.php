<?php

namespace App\Http\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Models\User;
use App\Constants\LicenseStatus;

class ActiveModelService
{

    public function active(Request $request)
    {
        $modelName = $request->request->get('modelName');
        $object = $modelName::find($request->request->get('modelId'));
        $object->active = $request->request->get('active');
        $object->save();

        return $object;

    }

}
