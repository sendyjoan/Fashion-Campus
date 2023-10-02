<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Gender;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        $categories = Category::all();
        $colors = Color::all();
        return view('admin.dashboard', compact('genders', 'categories', 'colors'));
    }
}
