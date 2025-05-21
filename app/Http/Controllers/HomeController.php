<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function accomodation()
    {
        return view('accomodation');
    }

    public function destination()
    {
        return view('destination');
    }

    public function lifestyle()
    {
        return view('lifestyle');
    }

    public function popular_vacation()
    {
        return view('popular_vacation');
    }

    public function popular_activity()
    {
        return view('popular_activity');
    }

}
