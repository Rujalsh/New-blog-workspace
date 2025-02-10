<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //
    public function about()
    {
        return view('components.layouts.navbar-components.about-page');
    }
    public function showContactUs()
    {
        return view('components.layouts.navbar-components.contact-us');
    }
}