<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use App\Models\User;
use App\Repositories\CityRepository;
use Hash;
use App\Repositories\CountryRepository;
use Illuminate\Http\Request;
use Password;
use Str;
use View;
use App\Repositories\InterestRepository;
use App\Repositories\UserRepository;
use Auth;
use App\Http\Requests\Web\LoginRequest;
use App\Http\Requests\Web\RegisterRequest;
use App\Constants\UserTypes;
use App\Http\Services\InterestService;
use Session;
use DB;
use PDF;
use App\Exports\BooksExport;
class AuthController extends Controller
{

    protected $cityRepository;
    protected $authService;
    protected $countryRepository;
    protected $interestRepository;
    protected $userRepository;
    public function __construct(CityRepository $cityRepository, AuthService $authService,CountryRepository $countryRepository, InterestRepository $interestRepository,UserRepository $userRepository


    )
    {
        $this->cityRepository = $cityRepository;
        $this->authService = $authService;
        $this->countryRepository = $countryRepository;
        $this->userRepository = $userRepository;
    }
  
    public function attempt(LoginRequest $request, AuthService $authService)
    {
        if (!$authService->attempt($request)) {
            session()->flash('error', "يوجد خطأ في بيانات الدخول");
            return redirect()->back();
        }

        $user = auth()->user();
  

       return redirect(route('web.home.index'));
    }


    public function login()
    {
 
        return View::make('web.auth.login');
    }





    public function register(Request $request)
    {
      $cities = $this->cityRepository->searchFromRequest(request())->get();
     $countries = $this->countryRepository->searchFromRequest(request())->get();
     $users = $this->userRepository->searchFromRequest(request())->get();
        return View::make('web.auth.register', ['cities' => $cities,'countries' => $countries,
            'users' => $users
 
    ]);
    }


    public function registerAction(RegisterRequest $request, AuthService $authService)
    {

   
        $user = $authService->registerFromRequest($request);


        auth()->login($user);

        session()->flash('success', trans('register_success_message'));
        return redirect(route('web.home.index'));
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();
        return redirect(route('web.home.index'));
    }

    public function profile()
    {
        $user = auth()->user();
        
        $cities = $this->cityRepository->searchFromRequest(request())->get();
     $countries = $this->countryRepository->searchFromRequest(request())->get();

        return view('web.auth.profile',['cities' => $cities,'user' => $user,'countries' => $countries]);
    }

   
    public function updateProfile(RegisterRequest $request)
    {  
        $user = auth()->user();
        // return $request;
        $this->authService->registerFromRequest($request, $user);
        return redirect(route('web.auth.profile'))->with('success', "تم التعديل بنجاح");
    }



    


}
