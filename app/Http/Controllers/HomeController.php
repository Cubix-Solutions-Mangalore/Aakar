<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::with('place','category')->latest()->take(6)->get();
        $activities = Entertainment::with('place','category')->latest()->take(6)->get();

        // dd($activities);
        return view('home', compact('accomodations', 'activities'));
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
