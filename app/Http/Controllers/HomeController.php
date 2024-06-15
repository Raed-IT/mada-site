<?php

namespace App\Http\Controllers;

use App\Models\Choosus;
use App\Models\Counter;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::all()->first();
        $services = Service::all();
        $counters = Counter::whereStatus(true)->get();
        $chooseuses = Choosus::all();
        return view('home')->with([
            'setting' => $setting,
            "services" => $services,
            "counters" => $counters,
            "chooseuses" => $chooseuses
        ]);
    }
}
