<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;
use App\Repositories\SocialRepository;
use App\Http\Services\SocialService;
use App\Http\Requests\Admin\SocialRequest;
use View;

class SocialController extends Controller
{
   
    protected $socialService;
    private $socialRepository;


    public function __construct(SocialService $socialService, SocialRepository $socialRepository)
    {
        $this->socialService = $socialService;
        $this->socialRepository = $socialRepository;
    }


    public function index(Request $request)
    {
        $list = $this->socialRepository->searchFromRequest(request())->paginate(50);

        $list->appends(request()->all());

        return View::make('admin.socials.index', ['list' => $list]);

    }
    public function create()
    {
        return view('admin.socials.new') ;
    }
  
    public function store(SocialRequest $request )
    {
        // return $request ;
        $this->socialService->fillFromRequest($request);
        return redirect(route('admin.socials.index'))->with('success', "تم الأضافة بنجاح");
    }
  
    public function edit(Social $social)
    {
        return view('admin.socials.edit',compact('social'));
    }

    public function update(SocialRequest $request, Social $social)
    {
        $this->socialService->fillFromRequest($request, $social);
        return redirect(route('admin.socials.index'))->with('success', "تم التعديل بنجاح");
    }
  
    public function destroy(Social $social)
    {       
        $social->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
