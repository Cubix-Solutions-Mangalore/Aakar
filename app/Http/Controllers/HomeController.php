<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Entertainment;
use App\Models\Food;
use App\Models\Shopping;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $accomodations = Accomodation::with('place','category')->latest()->take(6)->get();
        $activities = Entertainment::with('place','category')->latest()->take(6)->get();
        $food = Food::with('place','category')->latest()->take(9)->get();
        $threeFood = Food::with('place','category')->latest()->take(3)->get();
        $threeShop = Shopping::with('place','category')->latest()->take(3)->get();

        // dd($activities);
        return view('home', compact('accomodations', 'activities', 'food', 'threeFood', 'threeShop'));
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

    public function details()
    {
        return view('details');
    }
}
