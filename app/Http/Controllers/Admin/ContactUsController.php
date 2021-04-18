<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\Admin\ContactUsResources;
use App\Models\ContactUs;
use App\Repositories\ContactUsRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use View;

class ContactUsController extends Controller
{
    protected $contactUsRepository;

    public function __construct(ContactUsRepository $contactUsRepository)
    {
        $this->contactUsRepository = $contactUsRepository;
    }

    public function index(Request $request)
    {
        $list = $this->contactUsRepository->searchFromRequest(request())->paginate(10);
         return View::make('admin.contactUs.index', ['list' => $list]);

    }

    public function show(ContactUs $contact)
    {
        $response = ContactUs::where('id', '=', $contact->id)->update(['read' => 1]);
          return View::make('admin.contactUs.show', ['contact' => $contact]);
    }

    
    public function destroy(ContactUs $contact)
    {
         $response = $contact->delete();
          return redirect()->back()->with('success','تم الحذف بنجاح');
    }

}
