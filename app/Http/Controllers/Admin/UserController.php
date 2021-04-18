<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Constants\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use View;


class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
  
    }

    public function index(Request $request)
    {
        $request->request->set('type', UserTypes::USER);
        $list = $this->userRepository->searchFromRequest(request())->get();
        return View::make('admin.users.index', ['list' => $list]);

    }

     public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success',"تم حذف المستخدم بنجاح");
    }

}
