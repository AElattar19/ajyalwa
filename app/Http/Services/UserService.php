<?php

namespace App\Http\Services;

use App\Models\User;
use Symfony\Component\HttpFoundation\Request;
use App\Constants\UserTypes;
use App\Http\Services\UploaderService;
use Hash;

class UserService
{
    public $uploaderService ;

    public function __construct(UploaderService $uploaderService) {
    
        $this->uploaderService =$uploaderService ;
    
    }

    public function fillFromRequest(Request $request, $user = null)
    {
        if (!$user) {
            $user = new User();
        }

        $user->fill($request->request->all());
        $user->active = $request->get("active", 1);
        $user->type = $request->get("type");

        if($request->file('image')) {
            $user->image = $this->uploaderService->upload($request->file('image'), 'admins_image');
        }
        $user->save();

        return $user;
    }

    public function activateEmil(Request $request, $user = null)
    {
          $user = User::where('email_activation', $request->email_activation)->first();
          if ($user) {
              $user->update(['email_activation' => 1]);
          }

        return $user;
    }
    public function updateProfile(Request $request)
    {

        $user = auth()->user();
        $user->fill($request->all());
        if ($request->hasFile('image')) {
            $this->uploaderService->deleteFile($user->image);
            $user->image = $this->uploaderService->upload($request->file('image'), 'users_image');
        }

        $user->save();

        return $user;
    }

    public function passwordUpdate(Request $request)
    {
        $oldPassword = $request->get('old_password');
        $newPassword = $request->get('password');
        $hashedPassword = auth()->user()->password;

        if (Hash::check($oldPassword, $hashedPassword)) {
            User::find(auth()->user()->id)
                ->update(['password' => $newPassword]);
            return true;
        }

        return false;
    }
  
}
