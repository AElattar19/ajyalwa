<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Repositories\InterestRepository;
use App\Http\Services\InterestService;
use App\Http\Requests\Admin\InterestRequest;
use View;

class InterestController extends Controller
{
   
    protected $interestService;
    private $interestRepository;


    public function __construct(InterestService $interestService, InterestRepository $interestRepository)
    {
        $this->interestService = $interestService;
        $this->interestRepository = $interestRepository;
    }


    public function index(Request $request)
    {
        $list = $this->interestRepository->searchFromRequest(request())->paginate(50);

        $list->appends(request()->all());

        return View::make('admin.interests.index', ['list' => $list]);

    }
    public function create()
    {
        return view('admin.interests.new') ;
    }
  
    public function store(InterestRequest $request )
    {
        // return $request ;
        $this->InterestService->fillFromRequest($request);
        return redirect(route('admin.interests.index'))->with('success', "تم الأضافة بنجاح");
    }
  
    public function edit(Interest $interest)
    {
        return view('admin.interests.edit',compact('interest'));
    }

    public function update(InterestRequest $request, Interest $interest)
    {
        $this->interestService->fillFromRequest($request, $interest);
        return redirect(route('admin.interests.index'))->with('success', "تم التعديل بنجاح");
    }
  
    public function destroy(Interest $interest)
    {       
        $interest->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
