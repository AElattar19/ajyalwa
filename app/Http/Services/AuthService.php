<?php

namespace App\Http\Services;

use App\Models\User;
use App\Models\License;
use Symfony\Component\HttpFoundation\Request;
use App\Constants\UserTypes;
use App\Constants\LicenseStatus;

class AuthService
{
    protected $uploaderService;
    public function __construct(UploaderService $uploaderService)
    {
        $this->uploaderService = $uploaderService;
    }
    public function attempt(Request $request)
    {
        return auth()->attempt(
            [
                'email' => $request->request->get('email'),
                'password' => $request->request->get('password'),
                'active' => 1
            ]
        );
    }
    public function registerFromRequest(Request $request, $user = null)
    {
        if (!$user) {
            $user = new User();
        }
        $user->fill($request->request->all()); 
       if (!empty($request->file('image'))) {
            $user->image = $this->uploaderService->upload($request->file('image'), 'users_images');
        }
        if ($request->get('password') == '') {
            $request->request->remove('password');
        }
        $user->active = 1;
        $user->type =  UserTypes::USER;
        $user->accept = $request->request->get('accept');
        $user->save();
        if ($request->request->get('new_user') == 1)  {
                    $license = new License();
                    $license->user_id = $user->id;
                    $license->year = date_format($user->created_at, 'Y');
                    $license->status = LicenseStatus::UNPAID;
                    $license->save();
        }
        return $user;
    }

}
