<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;
use View;


class HomeController extends Controller
{

    public function index()
    {

     return View::make('web.home.index');
    }


}
