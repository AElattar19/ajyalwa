<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Services\LicenseService;
use App\Repositories\LicenseRepository;
use App\Models\License;

use View;

class LicenseController extends Controller
{


  
    protected $licenseService;
    protected $licenseRepository;

    public function __construct(LicenseService $licenseService, LicenseRepository $licenseRepository)
    {
        $this->licenseService = $licenseService;
        $this->licenseRepository = $licenseRepository;
    }

    public function index(Request $request)
    {
       
        $licenses = $this->licenseRepository->searchFromRequest(request())->get();
        return view('admin.licenses.index',['list' => $licenses]);
    }

    public function show(License $license)
    {
       // return $license;
       
        return view('admin.licenses.show',['license' => $license]);
    }

    public function update(Request $request, License $license)
    {

        $this->licenseService->finishReview($request, $license);

        return redirect(route('admin.licenses.index'))->with('success', "تم الموافقة علي الترخيص بنجاح");
    }

    public function destroy(License $license)
    {
        $license->delete();
       return redirect()->back()->with('success','تم الحذف بنجاح');

       
    }
}
