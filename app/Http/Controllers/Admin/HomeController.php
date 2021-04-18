<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Constants\UserTypes;
use App\Repositories\UserRepository;
use App\Repositories\CityRepository;
use App\Repositories\ContactUsRepository;
use App\Repositories\LicenseRepository;
use App\Constants\LicenseStatus;
use View;


class HomeController extends Controller
{

    protected $userRepository;
    protected $cityRepository;
    protected $contactUsRepository;
    protected $licenseRepository;



    public function __construct(UserRepository $userRepository, CityRepository $cityRepository, ContactUsRepository $contactUsRepository, LicenseRepository $licenseRepository)
    {
        $this->userRepository = $userRepository;
        $this->cityRepository = $cityRepository;
        $this->contactUsRepository = $contactUsRepository;
        $this->licenseRepository = $licenseRepository;

    }

    public function index(Request $request)
    {
    	$request->request->set('type', UserTypes::USER);
        $usersCount = $this->userRepository->searchFromRequest(request())->count();
        $citiesCount = $this->cityRepository->searchFromRequest(request())->count();
        $contactUsCount = $this->contactUsRepository->searchFromRequest(request())->count();
        $licensesCount = $this->licenseRepository->searchFromRequest(request())->where('status', '=',
        	LicenseStatus::PAID)->count();

     return View::make('admin.home.index', [

     	 'usersCount' => $usersCount,
     	 'citiesCount' => $citiesCount,
     	 'contactUsCount' => $contactUsCount,
     	 'licensesCount' => $licensesCount,

     	]);
    }


}
