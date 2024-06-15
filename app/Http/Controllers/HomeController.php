<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::all()->first();
        $services = Service::all();
        return view('home')->with(['setting' => $setting, "services" => $services]);
    }
}
