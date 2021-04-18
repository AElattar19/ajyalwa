<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Repositories\CityRepository;
use App\Http\Services\CityService;
use App\Http\Requests\Admin\CityRequest;
use View;

class CityController extends Controller
{
   
    protected $cityService;
    private $cityRepository;


    public function __construct(CityService $cityService, CityRepository $cityRepository)
    {
        $this->cityService = $cityService;
        $this->cityRepository = $cityRepository;
    }


    public function index(Request $request)
    {
        $list = $this->cityRepository->searchFromRequest(request())->paginate(50);

        $list->appends(request()->all());

        return View::make('admin.cities.index', ['list' => $list]);

    }
    public function create()
    {
        return view('admin.cities.new') ;
    }
  
    public function store(CityRequest $request )
    {
        // return $request ;
        $this->cityService->fillFromRequest($request);
        return redirect(route('admin.cities.index'))->with('success', "تم الأضافة بنجاح");
    }
  
    public function edit(City $city)
    {
        return view('admin.cities.edit',compact('city'));
    }

    public function update(CityRequest $request, City $city)
    {
        $this->cityService->fillFromRequest($request, $city);
        return redirect(route('admin.cities.index'))->with('success', "تم التعديل بنجاح");
    }
  
    public function destroy(City $city)
    {       
        $city->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
