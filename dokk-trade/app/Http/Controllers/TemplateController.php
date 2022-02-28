<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontEnd.home');
    }

    public function ContactUs()
    {
        return view('frontEnd.Contact');
    }

    public function About()
    {
        return view('frontEnd.about');
    }
}
