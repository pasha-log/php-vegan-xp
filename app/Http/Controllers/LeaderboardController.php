<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LeaderboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(): View {
        if (Auth::check()) {
            $user = Auth::user();

            return view('leaderboard', compact('user'));
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }
}
