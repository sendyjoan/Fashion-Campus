<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('admin.dashboard', compact('genders'));
    }
}
