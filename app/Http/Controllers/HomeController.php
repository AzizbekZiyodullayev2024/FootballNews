<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatchNew;

class HomeController extends Controller
{
    // public function index()
    // {
    //     // Bugungi o'yinlarni olish
    //     $matches = MatchNew::whereDate('start_time', now()->toDateString())->get();

    //     // So'nggi natijalar
    //     $recentMatches = MatchNew::orderBy('date', 'desc')->take(5)->get();

    //     // Blade shabloniga o'zgaruvchilarni yuborish
    //     return view('home', compact('matches', 'recentMatches'));
    // }
}