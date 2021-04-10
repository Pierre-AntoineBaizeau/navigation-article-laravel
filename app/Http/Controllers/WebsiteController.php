<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class WebsiteController extends Controller
{
    //
    public function index(): View
    {
        return View('homepage');
    }


}
