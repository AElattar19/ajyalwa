<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Repositories\CountryRepository;
use App\Http\Services\CountryService;
use App\Http\Requests\Admin\CountryRequest;
use View;

class CountryController extends Controller
{
   
    protected $countryService;
    private $countryRepository;


    public function __construct(CountryService $countryService, CountryRepository $countryRepository)
    {
        $this->countryService = $countryService;
        $this->countryRepository = $countryRepository;
    }


    public function index(Request $request)
    {
        $list = $this->countryRepository->searchFromRequest(request())->paginate(50);

        $list->appends(request()->all());

        return View::make('admin.cities.index', ['list' => $list]);

    }
    public function create()
    {
        return view('admin.cities.new') ;
    }
  
    public function store(CountryRequest $request )
    {
        // return $request ;
        $this->countryService->fillFromRequest($request);
        return redirect(route('admin.cities.index'))->with('success', "تم الأضافة بنجاح");
    }
  
    public function edit(Country $country)
    {
        return view('admin.cities.edit',compact('country'));
    }

    public function update(CountryRequest $request, Country $country)
    {
        $this->countryService->fillFromRequest($request, $country);
        return redirect(route('admin.cities.index'))->with('success', "تم التعديل بنجاح");
    }
  
    public function destroy(Country $country)
    {       
        $country->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
