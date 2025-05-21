<?php

namespace App\Http\Controllers;

use App\Models\Accomodation;
use App\Models\Entertainment;
use App\Models\Food;
use App\Models\Place;
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
        $acc = Accomodation::with('place','category')->get();
        // dd($acc);
        return view('accomodation', compact('acc'));
    }

    public function destination()
    {
        $place = Place::all();
        // dd($place);
        return view('destination', compact('place'));
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

    public function destinationDetails($id)
    {
        $place = Place::findOrFail($id);
        $accomodations = Accomodation::where('place_id', $id)->with('place','category')->latest()->take(6)->get();
        $activities = Entertainment::where('place_id', $id)->with('place','category')->latest()->take(6)->get();
        $food = Food::where('place_id', $id)->with('place','category')->latest()->take(6)->get();
        $shopping = Shopping::where('place_id', $id)->with('place','category')->latest()->take(6)->get();

        return view('destiDetail', compact('place', 'accomodations', 'activities', 'food', 'shopping'));
    }
}
