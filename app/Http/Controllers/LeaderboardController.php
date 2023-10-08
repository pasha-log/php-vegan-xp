<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LeaderboardController extends Controller
{
    
    public function index(): View {
            $user = Auth::user();

            return view('leaderboard', compact('user'));
    }
}
