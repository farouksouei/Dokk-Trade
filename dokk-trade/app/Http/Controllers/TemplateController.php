<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontEnd.home');
    }

    public function contactUs()
    {
        return view('frontEnd.contactUs');
    }

    public function about()
    {
        return view('frontEnd.about');
    }
}
