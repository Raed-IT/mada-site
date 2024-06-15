<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Choosus;
use App\Models\Counter;
use App\Models\Implement;
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
        $blogs = Blog::withCount("comments")->latest()->take(3)->get();
        $implements = Implement::all();
        return view('home')->with([
            'setting' => $setting,
            "services" => $services,
            "counters" => $counters,
            "chooseuses" => $chooseuses,
            "blogs" => $blogs,
            "implements" => $implements,
        ]);
    }
}
