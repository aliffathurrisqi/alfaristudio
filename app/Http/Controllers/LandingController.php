<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Service;
use App\Models\Company;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data['teams'] = Team::whereNull('deleted_at')->get();
        $data['services'] = Service::whereNull('deleted_at')->get();
        $data['company'] = Company::find(1);
        return view('landing.main', $data);
    }
}
