<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Web\ContactUsRequest;
use App\Http\Services\ContactUsService;
use View;


class ContactUsController extends Controller
{


    protected $contactUsService;

    public function __construct(ContactUsService $contactUsService)
    {
        $this->contactUsService = $contactUsService;
    }

    public function create()
    {
        return View::make('web.contactUs.create', ['user' => auth()->user()]);
    }

    public function store(ContactUsRequest $request)
    {
        $this->contactUsService->fillFromRequest($request);

        $toEmail = "info@ajyalwa.sa";


        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $subject = $request->subject;

        $messageBody = "Name: ".$name."<br />"." Email: ".$email."<br />"."Subject:".$subject."<br />"."Message:".$message;

        $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        $mailHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";
        mail($toEmail, $subject, $messageBody , $mailHeaders);

        return redirect(route('web.contactUs.create'))->with('success',"تم إرسال الرسالة بنجاح سيتم التواصل معكم في اقرب وقت");
    }

}
