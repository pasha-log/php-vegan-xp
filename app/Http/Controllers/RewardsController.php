<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            return view('rewards', compact('user'));
        } else {
            return redirect('/login'); // Redirect to the login page if the user is not authenticated
        }
    }

}

/**
 * Other todos: 
 * 
 * Once a user completes a vegan action, notify the user with a modal letting them know that they can afford new rewards, with a button that'll take them 
 * to the rewards page. The rewards page should have updated UI revealing the new affordable rewards. But once they claim a rewards, the cost is subtracted from their 
 * total XP?
 * 
 * 
 */