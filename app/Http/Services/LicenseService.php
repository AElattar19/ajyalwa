<?php

namespace App\Http\Services;

use App\Models\User;
use App\Models\License;
use Symfony\Component\HttpFoundation\Request;
use App\Constants\UserTypes;
use App\Constants\LicenseStatus;

class LicenseService
{

    protected $uploaderService;

    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }

    public function cronJob()
    {
        $users = User::OrderBy('id', 'ASC')
                ->where('type', '=', UserTypes::USER)
                ->where('active', '=', 1)
                ->get();

        foreach ($users as $user) {
            
                    $license = new License();
                    $license->user_id = $user->id;
                    $license->year = date("Y");
                    $license->status = LicenseStatus::UNPAID;
                    $license->save();
        }
    }

    public function fillFromRequest(Request $request, $license = null)
    {
        $license =License::where('id', $request->license_id)
            ->update([
                'status' => LicenseStatus::PENDING,
                'image' => $this->uploaderService->upload($request->file('image'), 'licenses_images'),
        ]);

        return $license;
    }

    public function finishReview(Request $request, $license = null)
    {
        $license =License::where('id', $license->id)
            ->update([
                'status' => $request->get("status"),
              
        ]);

        return $license;
    }
}
