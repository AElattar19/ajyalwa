<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Services\LicenseService;
use App\Repositories\LicenseRepository;
use View;
use App\Http\Requests\Web\LicenseRequest;

class LicenseController extends Controller
{


    protected $licenseService;
    protected $licenseRepository;

    public function __construct(LicenseService $licenseService, LicenseRepository $licenseRepository)
    {
        $this->licenseService = $licenseService;
        $this->licenseRepository = $licenseRepository;
    }

    public function cronJob()
    {
       
       $this->licenseService->cronJob();
       return"created successfully";
    }
    public function myLicenses(Request $request)
    {
        $user = auth()->user();
        // return $user->id;
        $request->request->set('user_id', $user->id);
        $licenses = $this->licenseRepository->searchFromRequest(request())->get();
        return view('web.auth.licenses',['licenses' => $licenses,'user' => $user]);
    }

    public function uploadLicense(LicenseRequest $request)
    {

        $this->licenseService->fillFromRequest($request);

        return redirect(route('web.auth.myLicenses'))->with('success', "تم رفع الترخيص بنجاح");
    }

}
